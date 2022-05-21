import sqlite3

# create a db with users, customers and invoices tables
def create_db(db_name):
    conn = sqlite3.connect(db_name)
    c = conn.cursor()
    c.execute("""CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY,
        username TEXT,
        password TEXT,
        email TEXT,
        role TEXT
    )""")
    c.execute("""CREATE TABLE IF NOT EXISTS customers (
        id INTEGER PRIMARY KEY,
        name TEXT,
        address TEXT,
        phone TEXT
    )""")
    c.execute("""CREATE TABLE IF NOT EXISTS invoices (
        id INTEGER PRIMARY KEY,
        customer_id INTEGER,
        user_id INTEGER,
        date TEXT,
        FOREIGN KEY(customer_id) REFERENCES customers(id),
        FOREIGN KEY(user_id) REFERENCES users(id)
    )""")

    # add admin user if it doesn't exist
    c.execute("SELECT * FROM users WHERE username='admin'")
    data = c.fetchone()
    if data is None:
        c.execute("INSERT INTO users (username, password, email, role) VALUES ('admin', 'admin', '', 'admin')")

    conn.commit()
    conn.close()
