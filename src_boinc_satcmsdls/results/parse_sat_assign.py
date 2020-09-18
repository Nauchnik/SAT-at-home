import sys
import glob
import os

fname_mask = sys.argv[1]
print('fname_mask: ' + fname_mask)
fname_list = glob.glob('*' + fname_mask + '*')
fname_list = sorted(fname_list)
print(fname_list)

sat_assign = []
ext_fname = ''
cnf_fname = ''
for fname in fname_list:
	if 'ext_' in fname:
		ext_fname = fname
	if '.cnf' in fname:
		cnf_fname = fname 
	if 'satcmsdls' in fname:
		with open(fname, 'r') as f:
			lines = f.read().splitlines()
			for line in lines:
				lst = line.split('SAT ')
				if len(lst) > 1:
					sat_assign.append(lst[1])
#print(sat_assign)
print('ext_fname: ' + ext_fname)

with open(fname_mask, 'w') as f:
	for sa in sat_assign:
		f.write(sa + '\n')

simp_sat_fname = 'tmp'
original_sat_fname = 'sat'
cnf_known_simp_vals = cnf_fname.split('.cnf')[0] + '_known999.cnf'
for sa in sat_assign:
	with open(simp_sat_fname, 'w') as o:
		#print(sa)
		o.write('s SATISFIABLE\n')
		o.write('v ')
		k = 1
		for x in sa:
			if x == '0':
				o.write('-')
			o.write(str(k) + ' ')
			k += 1
		o.write('\n')
	converted_fname = 'converted_from_ext_' + fname_mask
	os.system('./extend-solution.sh ./' + simp_sat_fname + ' ./' + ext_fname + ' > ./' + converted_fname)
	os.system('python3 ./sort_solution.py ./' + cnf_fname + ' ./' + converted_fname)
	os.system('./kissat ./' + cnf_known_simp_vals + ' > ./' + original_sat_fname)
	os.system('rm ./' + cnf_known_simp_vals)
	os.system('python3 ./sat_assign_to_odls.py ./' + original_sat_fname)
