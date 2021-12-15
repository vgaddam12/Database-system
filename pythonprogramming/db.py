import mysql.connector
from mysql.connector import errorcode

def select(conn,query):
    cursor = conn.cursor()
    cursor.execute(query)
    results = []
    for row in cursor.fetchall():
        results.append(row)
    cursor.close()
    return results
def execute(conn,query):  # update, delete, and insert
    cursor = conn.cursor()
    cursor.execute(query)
    conn.commit()
def show(rows):
    for row in rows:
        print(row)

try:
    conn = mysql.connector.connect(
        user="root",
        password="Mrcomputer",
        host="localhost",
        database="population_mig")
except mysql.connector.Error as err:
    print("Cannot connect.")
    exit()

rows = select(conn,"select * from migrant where source = 'UNO'")
show(rows)
print("Now insert a record")
execute(conn,"insert into migrant values (3,2,'Philipines','yearly',82000,'UNS',1)")
rows = select(conn,"select * from migrant")
show(rows)