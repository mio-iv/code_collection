import re

src_str = "abcdefgABCDEFG"
pattern = r"[aA]"

dst_str = re.sub(pattern, "1", src_str, 1)
print(dst_str)
