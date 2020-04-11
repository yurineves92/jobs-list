CREATE TABLE categories(
	id SERIAL PRIMARY KEY NOT NULL,
	name VARCHAR(100) NOT NULL
);

CREATE TABLE jobs(
	id SERIAL PRIMARY KEY NOT NULL,
	category_id INT NOT NULL,
    company VARCHAR(100) NOT NULL,
    job_title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    salary VARCHAR(255) NOT NULL,
    location VARCHAR(100) NOT NULL,
    contact_user VARCHAR(100) NOT NULL,
    contact_email VARCHAR(100) NOT NULL,
    post_date DATETIME NOW()
);