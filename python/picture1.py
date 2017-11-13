# -*- coding: UTF-8 -*-
from os import listdir
import json

t = listdir("../pictures/ru-de")

query_ru_de = open("../json/query-ru-de.json", "rb")
xml_ru_de = open(r"../json/xml-ru-de.json", "rb")

d1 = json.load(query_ru_de)
x1 = json.load(xml_ru_de)


s = open(r"../sql/pictures.sql", "a", encoding = "utf8")
s.write("\n");
fn = ""
lst = list()
for i in range(len(d1)):
    im = d1[i]["image"]
    for j in range(len(x1)):
        url = x1[j]["URL"]
        if url == im:
            fn = x1[j]["FileName"]
            k = fn.split('\\')
            if (k[4] not in t):
                qw = 'DELETE FROM ru_de WHERE RDp_name = "' + k[4] + '";\n'
                s.write(qw)
                
query_ru_de.close()
xml_ru_de.close()

query_en_ru = open("../json/query-en-ru.json", "rb")
xml_en_ru = open(r"../json/xml-en-ru.json", "rb")

d2 = json.load(query_en_ru)
x2 = json.load(xml_en_ru)

fn = ""

t = listdir("F://pictures/en-ru")

for i in range(len(d2)):
    im = d2[i]["image"]
    for j in range(len(x2)):
        url = x2[j]["URL"]
        if url == im:
            fn = x2[j]["FileName"]
            k = fn.split('\\')
            if (k[4] not in t):
                qw = 'DELETE FROM en_ru WHERE ERp_name = "' + k[4] + '";\n'
                s.write(qw)

query_en_ru.close()
xml_en_ru.close()

query_en_de = open("../json/query-en-de.json", "rb")
xml_en_de = open(r"../json/xml-en-de.json", "rb")

d3 = json.load(query_en_de)
x3 = json.load(xml_en_de)

fn = ""

t = listdir("../pictures/en-de")

for i in range(len(d3)):
    im = d3[i]["image"]
    for j in range(len(x3)):
        url = x3[j]["URL"]
        if url == im:
            fn = x3[j]["FileName"]
            k = fn.split('\\')
            if (k[3] not in t):
                qw = 'DELETE FROM en_ru WHERE ERp_name = "' + k[3] + '";\n'
                s.write(qw)

query_en_de.close()
xml_en_de.close()

s.close()




     
