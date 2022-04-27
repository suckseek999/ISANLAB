##import subprocess as st
##st.call("cd Desktop/ISANSync", shell=True)
##st.call("git pull", shell=True)
import time
import os
import datetime

#%d/%m/%Y %H:%M:%S
#05/11/2020 y02:38:14
while True:
	date = datetime.datetime.now()
	number = date.strftime("%S")
	if number == "44":
		print(number)
		#streama = os.popen('git remote add origin git@github.com:suckseek999/ISAN-Sync.git')
		stream = os.system('git pull git@github.com:MyISAN/ISANServer.git')
#time.sleep(100)
#os.wait()
#pinga = os.wait()
#print(pinga)
#os.code
#os.close(stream)
#output = stream.readlines()
#outputa = streama.readlines()



#import subprocess
#import sys

#subprocess.Popen("git pull git@github.com:suckseek999/ISAN-Sync.git")
#sys.exit(0)


#import git

