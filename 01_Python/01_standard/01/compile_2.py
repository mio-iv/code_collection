import re
 
string = "It is fine today."
pattern = re.compile(r"[a-zA-Z0-9]+")
for count in range(1000000):
    match_list = pattern.findall(string+str(count))
