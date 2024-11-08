import pymysql

def main():
    inputDate = input("Enter Date in the YYYY-MM-DD Format")
    moviesDB = pymysql.connect(
        host="localhost",
        user="root",
        password="$dhtfsw0&C",
        database="Movies"
    )
    cur = moviesDB.cursor()    
    theater_id = cur.execute("SELECT theater_id, SUM(revenue) AS total_revenue FROM showings WHERE date = '%s' GROUP BY theater_id ORDER BY total_revenue DESC LIMIT 1;" % inputDate)
    
    top_theater = cur.fetchone()
    theater_id = top_theater[0]
    cur.execute("SELECT theater_name FROM theaters WHERE id = '%s';" % theater_id)
    
    top_theater_name = cur.fetchone()
    print(top_theater_name)

if __name__ == "__main__":
    main()
