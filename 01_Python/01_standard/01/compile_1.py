import re
 
string = "It is fine today."
pattern = r"[a-zA-Z0-9]+"
for count in range(1000000):
    match_list = re.findall(pattern,string+str(count))