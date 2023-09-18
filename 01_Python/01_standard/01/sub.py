import re
# src_str = "abcdefgABCDEFG"
# dst_str = src_str.replace("a","1")
# print(dst_str)


# src_str = "abcdefgABCDEFG"
# pattern = r"[aA]"
# dst_str = re.sub(pattern, "1", src_str, 1)
# print(dst_str)

src_str = "abcdefgABCDEFG"
pattern = r"[a]"
dst_str = re.sub(pattern, "1", src_str, 0, re.I)
print(dst_str)