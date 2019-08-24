import subprocess

# if the script don't need output.
subprocess.call("php ani.php")

# if you want output
proc = subprocess.Popen("php ani.php", shell=True, stdout=subprocess.PIPE)
script_response = proc.stdout.read()