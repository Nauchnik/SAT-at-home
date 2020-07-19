import sys

CUBES_PER_WU = 20
PROBLEM = 'ls10_2_diag_known_cms_many_known_1st_row_min1m.cnf'

if len(sys.argv) < 4:
	print('Usage : script cubes_file start_wu_index end_wu_index')
	exit(1)

cubes_fname = sys.argv[1]
print(cubes_fname)
start_wu_index = int(sys.argv[2])
end_wu_index = int(sys.argv[3])
print('start_wu_index : %d' % start_wu_index)
print('end_wu_index : %d' % end_wu_index)

lines = []
with open(cubes_fname, 'r') as f:
	lines = f.read().splitlines()

print('%d cubes' % len(lines))

wus = []
wu = []
k = 0
for line in lines:
	if k == CUBES_PER_WU:
		wus.append(wu)
		wu = []
		k = 0
	wu.append(line)
	k += 1
if len(wu) > 0:
	wus.append(wu)
	
if start_wu_index < 0 or start_wu_index > len(wus)-1:
	print('incorrect start_wu_index')
	exit(1)
if end_wu_index < 0 or end_wu_index > len(wus)-1:
	print('incorrect end_wu_index')
	exit(1)

print('generating %d wus' % (end_wu_index-start_wu_index+1))
for i in range(start_wu_index, end_wu_index+1):
	with open('in_wuid' + str(i), 'w') as wufile:
		wufile.write(PROBLEM + '\n')
		for cube in wus[i]:
			wufile.write(cube + '\n')
	
print('%d wus' % len(wus))
