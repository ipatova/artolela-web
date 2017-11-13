# -*- coding: utf-8 -*-

import json

query_ru_de = open("../json/query-ru-de.json", "rb")
xml_ru_de = open(r"../json/xml-ru-de.json", "rb")
s = open(r"../sql/pictures.sql", "w", encoding = "utf8")

d1 = json.load(query_ru_de)
x1 = json.load(xml_ru_de)

fn = ""
s.write('DROP TABLE IF EXISTS ru_de;\n')
s.write('CREATE TABLE ru_de (\n\tRDid INTEGER NOT NULL PRIMARY KEY,\n\tRDlabel_ru VARCHAR(255),\n\tRDlabel_de VARCHAR(255),\n\tRDp_name VARCHAR(255),\n\tRDurl TEXT\n);\n')
        
for i in range(len(d1)):
    lr = d1[i]["label_ru"]
    ld = d1[i]["label_de"]
    im = d1[i]["image"]
    for j in range(len(x1)):
        url = x1[j]["URL"]
        if url == im:
            fn = x1[j]["FileName"]
            k = fn.split('\\')
            qw = 'INSERT INTO ru_de(RDid, RDlabel_ru, RDlabel_de, RDp_name, RDurl) VALUES (' + str(i+1) + ', "' + lr + '", "' + ld + '", "' + k[4] + '", "' + im + '");\n'
            s.write(qw)
            print(qw)

s.write("\n")

query_ru_de.close()
xml_ru_de.close()

query_en_ru = open("../json/query-en-ru.json", "rb")
xml_en_ru = open(r"../json/xml-en-ru.json", "rb")

d2 = json.load(query_en_ru)
x2 = json.load(xml_en_ru)

fn = ""
s.write('DROP TABLE IF EXISTS en_ru;\n')
s.write('CREATE TABLE en_ru (\n\tERid INTEGER NOT NULL PRIMARY KEY,\n\tERlabel_ru VARCHAR(255),\n\tERlabel_en VARCHAR(255),\n\tERp_name VARCHAR(255),\n\tERurl TEXT\n);\n')

print ('______________________________________________________')

for i in range(len(d2)):
    le = d2[i]["label_en"]
    lr = d2[i]["label_ru"]
    im = d2[i]["image"]
    for j in range(len(x2)):
        url = x2[j]["URL"]
        if url == im:
            fn = x2[j]["FileName"]
            k = fn.split('\\')
            qw = 'INSERT INTO en_ru(ERid, ERlabel_ru, ERlabel_en, ERp_name, ERurl) VALUES (' + str(i+1) + ', "' + lr + '", "' + le + '", "' + k[4] + '", "' + im + '");\n'
            s.write(qw)
            print(qw)

s.write("\n")

query_en_ru.close()
xml_en_ru.close()

query_en_de = open("../json/query-en-de.json", "rb")
xml_en_de = open(r"../json/xml-en-de.json", "rb")

d3 = json.load(query_en_de)
x3 = json.load(xml_en_de)

fn = ""
s.write('DROP TABLE IF EXISTS en_de;\n')
s.write('CREATE TABLE en_de (\n\tEDid INTEGER NOT NULL PRIMARY KEY,\n\tEDlabel_en VARCHAR(255),\n\tEDlabel_de VARCHAR(255),\n\tEDp_name VARCHAR(255),\n\tEDurl TEXT\n);\n')

print ('______________________________________________________')

for i in range(len(d3)):
    le = d3[i]["label_en"]
    ld = d3[i]["label_de"]
    im = d3[i]["image"]
    for j in range(len(x3)):
        url = x3[j]["URL"]
        if url == im:
            fn = x3[j]["FileName"]
            k = fn.split('\\')
            qw = 'INSERT INTO en_de(EDid, EDlabel_en, EDlabel_de, EDp_name, , EDurl) VALUES (' + str(i+1) + ', "' + le + '", "' + ld + '", "' + k[3] + '", "' + im + '");\n'
            s.write(qw)
            print(qw)
            
s.write("\n")

query_en_de.close()
xml_en_de.close()
