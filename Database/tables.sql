-- Create the Packages table
CREATE TABLE Packages (
    packages_no INT PRIMARY KEY,
    packages_name VARCHAR(100) NOT NULL,
    packages_discount INT NOT NULL,
    packages_status TINYINT(1) NOT NULL,
    packages_price DECIMAL(10, 2) NOT NULL,
    passenger_id INT
);

-- Create the Administrator table
CREATE TABLE Administrator (
    administrator_id INT AUTO_INCREMENT PRIMARY KEY, 
    administrator_fullname VARCHAR(100),
    administrator_username VARCHAR(100),
    administrator_password VARCHAR(30)
);

-- Create the Airlines table
CREATE TABLE Airline (
    airline_no INT PRIMARY KEY,
    airline_name VARCHAR(100) NOT NULL
);

-- Create the Airport table
CREATE TABLE Airport (
    airport_id INT PRIMARY KEY,
    airport_name VARCHAR(100) NOT NULL,
    airport_city VARCHAR(100) NOT NULL,
    airport_country VARCHAR(100) NOT NULL
);

-- Create the serve table (relationship table between Airport and Airline)
CREATE TABLE serve (
    airport_id INT,
    airline_no INT,
    FOREIGN KEY (airport_id) REFERENCES Airport (airport_id),
    FOREIGN KEY (airline_no) REFERENCES Airline (airline_no)
); 

-- Create the Flight table
CREATE TABLE Flight (
    flight_no INT PRIMARY KEY,
    departure VARCHAR(100) NOT NULL, 
    destination VARCHAR(100) NOT NULL, 
    airline_no INT,
    administrator_id INT,
    FOREIGN KEY (airline_no) REFERENCES Airline(airline_no),
    FOREIGN KEY (administrator_id) REFERENCES Administrator(administrator_id)    
);

-- Create the Passengers table
CREATE TABLE Passengers (
    passenger_id INT AUTO_INCREMENT PRIMARY KEY,
    passenger_fullname VARCHAR(100) NOT NULL,
    passenger_username VARCHAR(100) NOT NULL,
    passenger_email VARCHAR(100) NOT NULL,
    passenger_password VARCHAR(100) NOT NULL,
    passenger_phone VARCHAR(20) NOT NULL, 
    passenger_notifications TINYINT(1),
    packages_no INT,
    FOREIGN KEY (packages_no) REFERENCES Packages(packages_no),
    UNIQUE(passenger_username)
);

-- Create the Ticket table
CREATE TABLE Ticket (
    ticket_no VARCHAR(10) PRIMARY KEY,
    ticket_type VARCHAR(70) NOT NULL,
    ticket_class VARCHAR(20) NOT NULL, 
    ticket_price INT NOT NULL,
    flight_no INT,
    passenger_id INT,
    FOREIGN KEY (flight_no) REFERENCES Flight(flight_no)
);

-- CREATE THE TRANSACTION TABLE WHICH IS A RELATIONSHIP BETWEEN PASSENGERS AND TICKET

CREATE TABLE Transactions(
    transaction_id VARCHAR(8) PRIMARY KEY,
    transaction_amount INT NOT NULL, 
    transactions_ticketQuantity INT NOT NULL,
    PaymentMode VARCHAR(20) NOT NULL, 
    passenger_id INT,
    ticket_no VARCHAR(10),
    FOREIGN KEY (passenger_id) REFERENCES Passengers(passenger_id),
    FOREIGN KEY (ticket_no) REFERENCES Ticket(ticket_no)
);

CREATE TABLE FlightDate
(
  flight_date DATETIME NOT NULL,
  Flight_No INT NOT NULL,
  PRIMARY KEY (flight_date, Flight_no),
  FOREIGN KEY (Flight_no) REFERENCES Flight(Flight_no)
);


CREATE TABLE Notifications (
    notificationID INT AUTO_INCREMENT PRIMARY KEY,
    passenger_id INT NOT NULL,
    message VARCHAR(100) NOT NULL,
    Notification_datetime DATETIME NOT NULL,
    FOREIGN KEY (passenger_id) REFERENCES Passengers(passenger_id)
);

-- changes in the Transactions database

ALTER TABLE transactions
DROP COLUMN transaction_amount,
DROP COLUMN transactions_ticketQuantity;
