-- the data in this database is lorem ipsum (generated randomly). 
-- The information here does not apply to real people and it is not confidential 

-- before running this query:

-- create a database: "create schema webproject" or create it in phpmyadmin 
-- if you are going to use workbench to code in sql, run query: "Use webproject" in workbench 

-- run the query in tables.sql 
-- run the query below:


INSERT INTO Administrator (administrator_id, administrator_fullname, administrator_username, administrator_password)
VALUES
    (10001, 'John Smith', 'johnsmith', 'p@ssw0rd1'),
    (10002, 'Emma Johnson', 'emmajohnson', '123abc'),
    (10003, 'Michael Brown', 'michaelbrown', 'pass123'),
    (10004, 'Olivia Davis', 'oliviadavis', 'admin123'),
    (10005, 'William Miller', 'williammiller', 'securepass'),
    (10006, 'Sophia Wilson', 'sophiawilson', 'p@ssword'),
    (10007, 'Alexander Taylor', 'alextaylor', 'pass1234'),
    (10008, 'Isabella Anderson', 'isabellaanderson', 'abc123'),
    (10009, 'James Martinez', 'jamesmartinez', 'adminpass'),
    (10010, 'Oliver Clark', 'oliverclark', 'password123'),
    (10011, 'Charlotte Lee', 'charlottelee', 'p@ssw0rd2'),
    (10012, 'Benjamin White', 'benjaminwhite', '123def'),
    (10013, 'Amelia Davis', 'ameliadavis', 'admin456'),
    (10014, 'Henry Johnson', 'henryjohnson', 'securepass1'),
    (10015, 'Mia Martin', 'miamartin', 'pass321'),
    (10016, 'Ethan Thompson', 'ethanthompson', 'admin567'),
    (10017, 'Ava Garcia', 'avagarcia', 'qwe789'),
    (10018, 'Liam Hall', 'liamhall', 'password789'),
    (10019, 'Emily Turner', 'emilyturner', 'p@ssw0rd3'),
    (10020, 'Harper Adams', 'harperadams', '789abc'),
    (10021, 'Noah Nelson', 'noahnelson', 'admin890'),
    (10022, 'Evelyn Scott', 'evelynscott', 'def456'),
    (10023, 'Abigail Baker', 'abigailbaker', 'securepass2'),
    (10024, 'Jacob Gonzalez', 'jacobgonzalez', 'pass987'),
    (10025, 'Ella Hill', 'ellahill', 'admin098'),
    (10026, 'William Robinson', 'williamrobinson', 'zxc987'),
    (10027, 'Sofia Wright', 'sofiawright', 'password246'),
    (10028, 'James Mitchell', 'jamesmitchell', 'admin765'),
    (10029, 'Avery Perez', 'averyperez', 'qaz753'),
    (10030, 'Scarlett Roberts', 'scarlettroberts', 'password753'),
    (10031, 'Daniel Turner', 'danielturner', 'p@ssw0rd4'),
    (10032, 'Madison Cook', 'madisoncook', '753qwe'),
    (10033, 'Victoria Bailey', 'victoriabailey', 'admin321'),
    (10034, 'Benjamin Ross', 'benjaminross', 'poi098'),
    (10035, 'Grace Reed', 'gracereed', 'securepass3'),
    (10036, 'Sebastian Ward', 'sebastianward', '765asd'),
    (10037, 'Aria Ward', 'ariaward', 'admin654'),
    (10038, 'David Ward', 'davidward', 'lkj654'),
    (10039, 'Chloe Holmes', 'chloeholmes', 'password159'),
    (10040, 'Joseph Fisher', 'josephfisher', 'admin951'),
    (10041, 'Penelope Holmes', 'penelopeholmes', 'zxc852'),
    (10042, 'Zoe Garcia', 'zoegarcia', 'securepass4'),
    (10043, 'Jackson Perez', 'jacksonperez', '987rty'),
    (10044, 'Lily Young', 'lilyyoung', 'admin753'),
    (10045, 'Gabriel King', 'gabrielking', 'yui321'),
    (10046, 'Layla Adams', 'laylaadams', 'password357'),
    (10047, 'Samuel Hernandez', 'samuelhernandez', 'admin357'),
    (10048, 'Addison Green', 'addisongreen', 'vbn654'),
    (10049, 'Eleanor Turner', 'eleanorturner', 'securepass5'),
    (10050, 'Andrew Martinez', 'andrewmartinez', '369rty'),
    (10051, 'Natalie Watson', 'nataliewatson', 'admin369'),
    (10052, 'Levi Smith', 'levismith', 'mnb852'),
    (10053, 'Elizabeth Cooper', 'elizabethcooper', 'securepass6'),
    (10054, 'Owen Walker', 'owenwalker', '741poi'),
    (10055, 'Aubrey Wright', 'aubreywright', 'admin741'),
    (10056, 'Lillian Reed', 'lillianreed', 'xvb852'),
    (10057, 'Henry Rivera', 'henryrivera', 'securepass7'),
    (10058, 'Audrey Peterson', 'audreypeterson', '369asd'),
    (10059, 'Aaron Young', 'aaronyoung', 'admin963'),
    (10060, 'Savannah Butler', 'savannahbutler', '321bnm'),
    (10061, 'Christopher Mitchell', 'christophermitchell', 'securepass8'),
    (10062, 'Brooklyn Turner', 'brooklynturner', '789mnb'),
    (10063, 'Samantha Nelson', 'samanthanelson', 'admin852'),
    (10064, 'Charles Perez', 'charlesperez', '852vcx'),
    (10065, 'Grace Edwards', 'graceedwards', 'securepass9'),
    (10066, 'Anthony Turner', 'anthonyturner', '963qwe'),
    (10067, 'Hannah Williams', 'hannahwilliams', 'admin963'),
    (10068, 'Jonathan Moore', 'jonathanmoore', '963zxc'),
    (10069, 'Aaliyah Parker', 'aaliyahparker', 'securepass10'),
    (10070, 'Nathan Hall', 'nathanhall', '963lkj'),
    (10071, 'Eli Wilson', 'eliwilson', '753lkj'),
    (10072, 'Addison Rodriguez', 'addisonrodriguez', 'securepass11'),
    (10073, 'Layla Stewart', 'laylastewart', '789pom'),
    (10074, 'Avery Carter', 'averycarter', 'admin963'),
    (10075, 'Emilia Thompson', 'emiliathompson', '852lkj'),
    (10076, 'Josephine Hernandez', 'josephinehernandez', 'securepass12'),
    (10077, 'Caleb Wright', 'calebwright', '963rty'),
    (10078, 'Aurora Morris', 'auroramorris', 'admin741'),
    (10079, 'Henry Phillips', 'henryphillips', '852rty'),
    (10080, 'Madelyn Flores', 'madelynflores', 'securepass13'),
    (10081, 'Jeremiah Foster', 'jeremiahfoster', '123poi'),
    (10082, 'Paisley Peterson', 'paisleypeterson', 'admin852'),
    (10083, 'Lucas Cooper', 'lucascooper', '789vcx'),
    (10084, 'Aria Cox', 'ariacox', 'securepass14'),
    (10085, 'Ella Ramirez', 'ellaramirez', '753bnm'),
    (10086, 'David Flores', 'davidflores', 'admin159'),
    (10087, 'Mila Turner', 'milaturner', '852asd'),
    (10088, 'Scarlett Diaz', 'scarlettdiaz', 'securepass15'),
    (10089, 'Jack Lewis', 'jacklewis', '753mnb'),
    (10090, 'Victoria Smith', 'victoriasmith', 'admin753'),
    (10091, 'Luke Wright', 'lukewright', '852poi'),
    (10092, 'Arianna Scott', 'ariannascott', 'securepass16'),
    (10093, 'Ryan Foster', 'ryanfoster', '369asd'),
    (10094, 'Sadie Brooks', 'sadiebrooks', 'admin369'),
    (10095, 'Gabriel Allen', 'gabrielallen', '852zxc'),
    (10096, 'Hailey Wood', 'haileywood', 'securepass17'),
    (10097, 'Maxwell Ramirez', 'maxwellramirez', '369qwe'),
    (10098, 'Elizabeth Adams', 'elizabethadams', 'admin147'),
    (10099, 'Grayson Martinez', 'graysonmartinez', '369zxc'),
    (10100, 'Stella Phillips', 'stellaphillips', 'securepass18')
;

INSERT INTO Airline (airline_no, airline_name)
VALUES
    (1001, 'WizzAir'),
    (1002, 'Lufthansa'),
    (1003, 'Emirates'),
    (1004, 'British Airways'),
    (1005, 'Delta Air Lines'),
    (1006, 'Air France'),
    (1007, 'United Airlines'),
    (1008, 'Singapore Airlines'),
    (1009, 'Qatar Airways'),
    (1010, 'American Airlines'),
    (1011, 'Turkish Airlines'),
    (1012, 'Cathay Pacific'),
    (1013, 'KLM Royal Dutch Airlines'),
    (1014, 'Etihad Airways'),
    (1015, 'Virgin Atlantic'),
    (1016, 'Ryanair'),
    (1017, 'Air Canada'),
    (1018, 'Qantas'),
    (1019, 'Southwest Airlines'),
    (1020, 'Finnair'),
    (1021, 'Alaska Airlines'),
    (1022, 'Japan Airlines'),
    (1023, 'Air India'),
    (1024, 'Norwegian Air Shuttle'),
    (1025, 'Hawaiian Airlines'),
    (1026, 'SAS Scandinavian Airlines'),
    (1027, 'EgyptAir'),
    (1028, 'China Airlines'),
    (1029, 'Air New Zealand'),
    (1030, 'Aeroflot')
    ;


INSERT INTO Airport (airport_id, airport_name, airport_city, airport_country)
VALUES
    (100001, 'London Heathrow Airport', 'London', 'United Kingdom'),
    (100002, 'Los Angeles International Airport', 'Los Angeles', 'United States'),
    (100003, 'Tokyo Haneda Airport', 'Tokyo', 'Japan'),
    (100004, 'Paris Charles de Gaulle Airport', 'Paris', 'France'),
    (100005, 'Dubai International Airport', 'Dubai', 'United Arab Emirates'),
    (100006, 'Beijing Capital International Airport', 'Beijing', 'China'),
    (100007, 'Sydney Airport', 'Sydney', 'Australia'),
    (100008, 'Frankfurt Airport', 'Frankfurt', 'Germany'),
    (100009, 'Amsterdam Airport Schiphol', 'Amsterdam', 'Netherlands'),
    (100010, 'Singapore Changi Airport', 'Singapore', 'Singapore'),
    (100011, 'John F. Kennedy International Airport', 'New York', 'United States'),
    (100012, 'Hong Kong International Airport', 'Hong Kong', 'China'),
    (100013, 'Istanbul Airport', 'Istanbul', 'Turkey'),
    (100014, 'Toronto Pearson International Airport', 'Toronto', 'Canada'),
    (100015, 'Incheon International Airport', 'Seoul', 'South Korea'),
    (100016, 'Munich Airport', 'Munich', 'Germany'),
    (100017, 'Madrid Barajas Airport', 'Madrid', 'Spain'),
    (100018, 'São Paulo Guarulhos International Airport', 'São Paulo', 'Brazil'),
    (100019, 'Melbourne Airport', 'Melbourne', 'Australia'),
    (100020, 'Vienna International Airport', 'Vienna', 'Austria'),
    (100021, 'Zurich Airport', 'Zurich', 'Switzerland'),
    (100022, 'Rome Fiumicino Airport', 'Rome', 'Italy'),
    (100023, 'Copenhagen Airport', 'Copenhagen', 'Denmark'),
    (100024, 'Athens International Airport', 'Athens', 'Greece'),
    (100025, 'Stockholm Arlanda Airport', 'Stockholm', 'Sweden'),
    (100026, 'Dublin Airport', 'Dublin', 'Ireland'),
    (100027, 'Helsinki Airport', 'Helsinki', 'Finland'),
    (100028, 'Oslo Airport', 'Oslo', 'Norway'),
    (100029, 'Mumbai Chhatrapati Shivaji Maharaj International Airport', 'Mumbai', 'India'),
    (100030, 'Mexico City International Airport', 'Mexico City', 'Mexico'),
    (100031, 'São Paulo Congonhas Airport', 'São Paulo', 'Brazil'),
    (100032, 'Lisbon Portela Airport', 'Lisbon', 'Portugal'),
    (100033, 'Moscow Domodedovo Airport', 'Moscow', 'Russia'),
    (100034, 'Brussels Airport', 'Brussels', 'Belgium'),
    (100035, 'Seoul Gimpo International Airport', 'Seoul', 'South Korea'),
    (100036, 'Budapest Ferenc Liszt International Airport', 'Budapest', 'Hungary'),
    (100037, 'Istanbul Sabiha Gökçen Airport', 'Istanbul', 'Turkey'),
    (100038, 'Vienna Schwechat Airport', 'Vienna', 'Austria'),
    (100039, 'Doha Hamad International Airport', 'Doha', 'Qatar'),
    (100040, 'Dublin Shannon Airport', 'Dublin', 'Ireland'),
    (100041, 'Berlin Tegel Airport', 'Berlin', 'Germany'),
    (100042, 'Lyon Saint-Exupéry Airport', 'Lyon', 'France'),
    (100043, 'Munich Memmingen Airport', 'Munich', 'Germany'),
    (100044, 'Milan Malpensa Airport', 'Milan', 'Italy'),
    (100045, 'Amsterdam Rotterdam The Hague Airport', 'Amsterdam', 'Netherlands'),
    (100046, 'Warsaw Chopin Airport', 'Warsaw', 'Poland'),
    (100047, 'Glasgow Airport', 'Glasgow', 'United Kingdom'),
    (100048, 'Nice Côte d Azur Airport', 'Nice', 'France'),
    (100049, 'Manchester Airport', 'Manchester', 'United Kingdom'),
    (100050, 'Hamburg Airport', 'Hamburg', 'Germany')
    ;


INSERT INTO serve (airport_id, airline_no)
VALUES
    (100030, 1012),
    (100017, 1005),
    (100014, 1013),
    (100010, 1009),
    (100008, 1016),
    (100019, 1004),
    (100009, 1027),
    (100025, 1017),
    (100033, 1008),
    (100040, 1018),
    (100036, 1015),
    (100020, 1014),
    (100002, 1011),
    (100003, 1007),
    (100039, 1003),
    (100037, 1010),
    (100021, 1025),
    (100006, 1006),
    (100032, 1023),
    (100035, 1022),
    (100027, 1002),
    (100016, 1001),
    (100011, 1029),
    (100026, 1026),
    (100023, 1030),
    (100022, 1020),
    (100041, 1021),
    (100018, 1024),
    (100029, 1028),
    (100024, 1019)
    ; 

INSERT INTO Flight (flight_no, departure, destination, airline_no, administrator_id)
VALUES
    (1000001, 'London', 'New York', 1001, 10001),
    (1000002, 'Los Angeles', 'Tokyo', 1002, 10002),
    (1000003, 'Paris', 'Dubai', 1003, 10003),
    (1000004, 'Singapore', 'London', 1004, 10004),
    (1000005, 'Beijing', 'Los Angeles', 1005, 10005),
    (1000006, 'New York', 'Paris', 1006, 10006),
    (1000007, 'Dubai', 'Sydney', 1007, 10007),
    (1000008, 'Frankfurt', 'Amsterdam', 1008, 10008),
    (1000009, 'Amsterdam', 'Singapore', 1009, 10009),
    (1000010, 'Istanbul', 'New York', 1010, 10010),
    (1000011, 'Hong Kong', 'London', 1011, 10011),
    (1000012, 'Toronto', 'Istanbul', 1012, 10012),
    (1000013, 'Seoul', 'Toronto', 1013, 10013),
    (1000014, 'Munich', 'Madrid', 1014, 10014),
    (1000015, 'Madrid', 'São Paulo', 1015, 10015),
    (1000016, 'Melbourne', 'Dubai', 1016, 10016),
    (1000017, 'Vienna', 'New York', 1017, 10017),
    (1000018, 'Zurich', 'Rome', 1018, 10018),
    (1000019, 'Copenhagen', 'Athens', 1019, 10019),
    (1000020, 'Stockholm', 'Dublin', 1020, 10020),
    (1000021, 'Helsinki', 'Oslo', 1021, 10021),
    (1000022, 'Mumbai', 'Moscow', 1022, 10022),
    (1000023, 'Mexico City', 'São Paulo', 1023, 10023),
    (1000024, 'Berlin', 'Lisbon', 1024, 10024),
    (1000025, 'Lyon', 'Moscow', 1025, 10025),
    (1000026, 'Milan', 'Amsterdam', 1026, 10026),
    (1000027, 'Warsaw', 'Glasgow', 1027, 10027),
    (1000028, 'Nice', 'Manchester', 1028, 10028),
    (1000029, 'Hamburg', 'Helsinki', 1029, 10029),
    (1000030, 'Oslo', 'Berlin', 1030, 10030);

    -- return tickets:
    INSERT INTO Flight (flight_no, departure, destination, airline_no, administrator_id)
VALUES
    (1000031, 'New York', 'London', 1001, 10001),
    (1000032, 'Tokyo', 'Los Angeles', 1002, 10002),
    (1000033, 'Dubai', 'Paris', 1003, 10003),
    (1000034, 'London', 'Singapore', 1004, 10004),
    (1000035, 'Los Angeles', 'Beijing', 1005, 10005),
    (1000036, 'Paris', 'New York', 1006, 10006),
    (1000037, 'Sydney', 'Dubai', 1007, 10007),
    (1000038, 'Amsterdam', 'Frankfurt', 1008, 10008),
    (1000039, 'Singapore', 'Amsterdam', 1009, 10009),
    (1000040, 'New York', 'Istanbul', 1010, 10010),
    (1000041, 'London', 'Hong Kong', 1011, 10011),
    (1000042, 'Istanbul', 'Toronto', 1012, 10012),
    (1000043, 'Toronto', 'Seoul', 1013, 10013),
    (1000044, 'Madrid', 'Munich', 1014, 10014),
    (1000045, 'São Paulo', 'Madrid', 1015, 10015),
    (1000046, 'Dubai', 'Melbourne', 1016, 10016),
    (1000047, 'New York', 'Vienna', 1017, 10017),
    (1000048, 'Rome', 'Zurich', 1018, 10018),
    (1000049, 'Athens', 'Copenhagen', 1019, 10019),
    (1000050, 'Dublin', 'Stockholm', 1020, 10020),
    (1000051, 'Oslo', 'Helsinki', 1021, 10021),
    (1000052, 'Moscow', 'Mumbai', 1022, 10022),
    (1000053, 'São Paulo', 'Mexico City', 1023, 10023),
    (1000054, 'Lisbon', 'Berlin', 1024, 10024),
    (1000055, 'Moscow', 'Lyon', 1025, 10025),
    (1000056, 'Amsterdam', 'Milan', 1026, 10026),
    (1000057, 'Glasgow', 'Warsaw', 1027, 10027),
    (1000058, 'Manchester', 'Nice', 1028, 10028),
    (1000059, 'Helsinki', 'Hamburg', 1029, 10029),
    (1000060, 'Berlin', 'Oslo', 1030, 10030);


INSERT INTO Packages (packages_no, packages_name, packages_discount, packages_status, passenger_id, packages_price)
VALUES
    (1, 'Standard Membership', 10, 1, 30000001, 60.00),
    (2, 'Travel Membership', 15, 1, 30000002, 150.00),
    (3, 'Cheap Finds Membership', 20, 1, 30000003, 80.00),
    (4, 'Couple Membership', 12, 1, 30000004, 170.00),
    (5, 'Instagram Membership', 8, 1, 30000005, 200.00),
    (6, 'Group Membership', 5, 1, 30000006, 180.00),
    (7, 'Deluxe Membership', 0, 1, 30000007, 250.00),
    (8, 'Exclusive Membership', 18, 1, 30000008, 150.00),
    (9, 'Premium Membership', 25, 1, 30000009, 300.00),
    (10, 'Elite Membership', 30, 1, 30000010, 400.00);


-- Manually generated data for Passengers table
INSERT INTO Passengers (passenger_id, passenger_fullname, passenger_username, passenger_email, passenger_password, passenger_phone, passenger_notifications, packages_no)
VALUES
    (30000001, 'Emma Johnson', 'emmajohnson123', 'emma@example.com', '5f4dcc3b5aa765d61d8327deb882cf99', '+1234567890', 1, 2),
    (30000002, 'Michael Brown', 'michaelbrown456', 'michael@example.com', '098f6bcd4621d373cade4e832627b4f6', '+9876543210', 0, NULL),
    (30000003, 'Olivia Davis', 'oliviadavis789', 'olivia@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14155552671', 1, 5),
    (30000004, 'William Miller', 'williammiller321', 'william@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460000', 0, NULL),
    (30000005, 'Sophia Wilson', 'sophiawilson654', 'sophia@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345678', 1, 3),
     (30000006, 'Ava Garcia', 'avagarcia753', 'ava@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552671', 1, 7),
    (30000007, 'Liam Hall', 'liamhall852', 'liam@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460001', 0, NULL),
    (30000008, 'Emily Turner', 'emilyturner369', 'emily@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345679', 1, 1),
    (30000009, 'Harper Adams', 'harperadams654', 'harper@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552672', 0, NULL),
    (30000010, 'Noah Nelson', 'noahnelson123', 'noah@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460002', 1, 10),
    (30000011, 'Evelyn Scott', 'evelynscott789', 'evelyn@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345680', 1, 4),
    (30000012, 'Abigail Baker', 'abigailbaker456', 'abigail@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552673', 0, NULL),
    (30000013, 'Jacob Gonzalez', 'jacobgonzalez852', 'jacob@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460003', 1, 9),
    (30000014, 'Ella Hill', 'ellahill963', 'ella@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345681', 1, 6),
    (30000015, 'William Robinson', 'williamrobinson369', 'william.robinson@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552674', 0, NULL),
    (30000016, 'Sofia Wright', 'sofiawright852', 'sofia@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460004', 1, 8),
    (30000017, 'James Mitchell', 'jamesmitchell123', 'james@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345682', 0, NULL),
    (30000018, 'Avery Perez', 'averyperez789', 'avery@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552675', 1, 3),
    (30000019, 'Benjamin Roberts', 'benjaminroberts456', 'benjamin@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460005', 1, 7),
    (30000020, 'Luna Taylor', 'lunataylor963', 'luna@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345683', 0, NULL),
    (30000021, 'Henry Clark', 'henryclark123', 'henry@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552676', 1, 2),
    (30000022, 'Scarlett Rodriguez', 'scarlettrodriguez852', 'scarlett@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460006', 1, 5),
    (30000023, 'Daniel Lewis', 'daniellewis789', 'daniel@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345684', 0, NULL),
    (30000024, 'Mia Lee', 'mialee456', 'mia@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552677', 1, 10),
    (30000025, 'Logan Walker', 'loganwalker963', 'logan@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460007', 1, 4),
    (30000026, 'Grace Young', 'graceyoung123', 'grace@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345685', 0, NULL),
    (30000027, 'Jackson Martinez', 'jacksonmartinez789', 'jackson@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552678', 1, 9),
    (30000028, 'Chloe Hernandez', 'chloehernandez852', 'chloe@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460008', 1, 6),
    (30000029, 'Sebastian Hill', 'sebastianhill369', 'sebastian@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345686', 0, NULL),
    (30000030, 'Zoe Green', 'zoegreen852', 'zoe@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552679', 1, 8),
    (30000031, 'Carter Adams', 'carteradams123', 'carter@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460009', 0, NULL),
    (30000032, 'Hannah Gonzalez', 'hannahgonzalez789', 'hannah@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345687', 1, 3),
    (30000033, 'Isaac Parker', 'isaacparker456', 'isaac@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552680', 0, NULL),
    (30000034, 'Lily Wright', 'lilywright963', 'lily@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460010', 1, 7),
    (30000035, 'Michael Stewart', 'michaelstewart369', 'michael@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345688', 1, 1),
    (30000036, 'Eleanor Butler', 'eleanorbutler852', 'eleanor@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552681', 0, NULL),
    (30000037, 'Alexander Gonzales', 'alexandergonzales123', 'alexander@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460011', 1, 10),
    (30000038, 'Penelope Ward', 'penelopeward789', 'penelope@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345689', 1, 4),
    (30000039, 'Matthew Foster', 'matthewfoster456', 'matthew@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552682', 0, NULL),
    (30000040, 'Mila Bennett', 'milabennett963', 'mila@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460012', 1, 9),
    (30000041, 'Lucas Brooks', 'lucasbrooks852', 'lucas@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345690', 1, 6),
    (30000042, 'Aria Powell', 'ariapowell369', 'aria@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552683', 0, NULL),
    (30000043, 'Oliver Bennett', 'oliverbennett123', 'oliver@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460013', 1, 8),
    (30000044, 'Aubrey Richardson', 'aubreyrichardson789', 'aubrey@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345691', 0, NULL),
    (30000045, 'Emma Reed', 'emmareed852', 'emma@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552684', 1, 2),
    (30000046, 'Leo Davis', 'leodavis963', 'leo@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460014', 1, 5),
    (30000047, 'Stella Turner', 'stellaturner456', 'stella@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345692', 0, NULL),
    (30000048, 'Christopher Reed', 'christopherreed123', 'christopher@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552685', 1, 10),
    (30000049, 'Nora Sanchez', 'norasanchez789', 'nora@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460015', 1, 4),
    (30000050, 'Daniel Morris', 'danielmorris456', 'daniel@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345693', 0, NULL),
    (30000051, 'Scarlett Griffin', 'scarlettgriffin852', 'scarlett@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552686', 1, 9),
    (30000052, 'Grace Adams', 'graceadams963', 'grace@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460016', 1, 6),
    (30000053, 'David Richardson', 'davidrichardson369', 'david@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345694', 0, NULL),
    (30000054, 'Sofia Anderson', 'sofiaanderson852', 'sofia@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552687', 1, 8),
    (30000055, 'Julian Murphy', 'julianmurphy123', 'julian@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460017', 0, NULL),
    (30000056, 'Ella Young', 'ellayoung789', 'ella@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345695', 1, 3),
    (30000057, 'Jack Peterson', 'jackpeterson963', 'jack@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552688', 0, NULL),
    (30000058, 'Victoria King', 'victoriaking852', 'victoria@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460018', 1, 7),
    (30000059, 'Samuel Campbell', 'samuelcampbell369', 'samuel@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345696', 1, 1),
    (30000060, 'Layla Cox', 'laylacox123', 'layla@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552689', 0, NULL),
    (30000061, 'Henry Russell', 'henryrussell963', 'henry@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460019', 1, 10),
    (30000062, 'Aurora Hayes', 'aurorahayes789', 'aurora@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345697', 1, 4),
    (30000063, 'Nathan Hughes', 'nathanhughes456', 'nathan@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552690', 0, NULL),
    (30000064, 'Hazel Rogers', 'hazelrogers852', 'hazel@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460020', 1, 9),
    (30000065, 'Wyatt Wright', 'wyattwright369', 'wyatt@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345698', 1, 6),
    (30000066, 'Brooklyn Baker', 'brooklynbaker852', 'brooklyn@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552691', 0, NULL),
    (30000067, 'Henry Foster', 'henryfoster123', 'henry@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460021', 1, 8),
    (30000068, 'Scarlett Powell', 'scarlettpowell789', 'scarlett@example.com', '098f6bcd4621d373cade4e832627b4f6', '+61212345699', 0, NULL),
    (30000069, 'Gabriel Cox', 'gabrielcox963', 'gabriel@example.com', '098f6bcd4621d373cade4e832627b4f6', '+14085552692', 1, 2),
    (30000070, 'Zoey Mitchell', 'zoeymitchell852', 'zoey@example.com', '098f6bcd4621d373cade4e832627b4f6', '+442079460022', 1, 5);

INSERT INTO Ticket (ticket_no, ticket_type, ticket_class, ticket_price, flight_no)
VALUES
    ('A123456B', 'return', 'economy', 500, 1000001),
    ('B234567C', 'one way', 'business', 1000, 1000002),
    ('C345678D', 'return', 'first class', 2000, 1000003),
    ('D456789E', 'one way', 'economy', 700, 1000004),
    ('E567890F', 'return', 'business', 1200, 1000005),
    ('F678901G', 'one way', 'first class', 2500, 1000006),
    ('G789012H', 'return', 'economy', 550, 1000007),
    ('H890123I', 'one way', 'business', 950, 1000008),
    ('I901234J', 'return', 'first class', 1800, 1000009),
    ('J012345K', 'one way', 'economy', 600, 1000010),
    ('A1234567A', 'return', 'economy', 500, 1000001),
    ('B2345678B', 'one way', 'business', 1000, 1000002),
    ('C3456789C', 'return', 'first class', 1500, 1000003),
    ('D4567890D', 'one way', 'economy', 800, 1000004),
    ('E5678901E', 'return', 'business', 1200, 1000005),
    ('F6789012F', 'one way', 'first class', 1800, 1000006),
    ('G7890123G', 'return', 'economy', 600, 1000007),
    ('H8901234H', 'one way', 'business', 1100, 1000008),
    ('I9012345I', 'return', 'first class', 1600, 1000009),
    ('J0123456J', 'one way', 'economy', 750, 1000010),
    ('K1234567K', 'return', 'business', 1050, 1000011),
    ('L2345678L', 'one way', 'first class', 1750, 1000012),
    ('M3456789M', 'return', 'economy', 550, 1000013),
    ('N4567890N', 'one way', 'business', 950, 1000014),
    ('O5678901O', 'return', 'first class', 1400, 1000015),
    ('P6789012P', 'one way', 'economy', 700, 1000016),
    ('Q7890123Q', 'return', 'business', 1150, 1000017),
    ('R8901234R', 'one way', 'first class', 1700, 1000018),
    ('S9012345S', 'return', 'economy', 600, 1000019),
    ('T0123456T', 'one way', 'business', 1000, 1000020),
    ('U1234567U', 'return', 'first class', 1500, 1000021),
    ('V2345678V', 'one way', 'economy', 800, 1000022),
    ('W3456789W', 'return', 'business', 1200, 1000023),
    ('X4567890X', 'one way', 'first class', 1800, 1000024),
    ('Y5678901Y', 'return', 'economy', 500, 1000025),
    ('Z6789012Z', 'one way', 'business', 1000, 1000026),
    ('A7890193A', 'return', 'first class', 1500, 1000027),
    ('B8901234B', 'one way', 'economy', 800, 1000028),
    ('C9012345C', 'return', 'business', 1200, 1000029),
    ('D0123456D', 'one way', 'first class', 1800, 1000030),
    ('E1234567E', 'return', 'economy', 500, 1000031),
    ('F2345678F', 'one way', 'business', 1000, 1000032),
    ('G3456789G', 'return', 'first class', 1500, 1000033),
    ('H4567890H', 'one way', 'economy', 800, 1000034),
    ('I5678901I', 'return', 'business', 1200, 1000035),
    ('J6789012J', 'one way', 'first class', 1800, 1000036),
    ('K7890123K', 'return', 'economy', 500, 1000037),
    ('L8901234L', 'one way', 'business', 1000, 1000038),
    ('M9012345M', 'return', 'first class', 1500, 1000039),
    ('N0123456N', 'one way', 'economy', 800, 1000040),
    ('O1234567O', 'return', 'business', 1200, 1000041),
    ('P2345678P', 'one way', 'first class', 1800, 1000042),
    ('Q3456789Q', 'return', 'economy', 500, 1000043),
    ('R4567890R', 'one way', 'business', 1000, 1000044),
    ('S5678901S', 'return', 'first class', 1500, 1000045),
    ('T6789012T', 'one way', 'economy', 800, 1000046),
    ('U7890123U', 'return', 'business', 1200, 1000047),
    ('V8901234V', 'one way', 'first class', 1800, 1000048),
    ('W9012345W', 'return', 'economy', 500, 1000049),
    ('X0123456X', 'one way', 'business', 1000, 1000050);

-- If trying to add data into transactions table and you get the following error:
-- Error Code: 1452. Cannot add or update a child row: a foreign key constraint fails

-- to handle the error first disable foreign key checks by running the query below: 
SET FOREIGN_KEY_CHECKS=0;

-- then execute the needed query:

    INSERT INTO Transactions (transaction_id, transaction_amount, transactions_ticketQuantity, PaymentMode, passenger_id, ticket_no)
VALUES
    ('TR0001', 1500, 1, 'Visa', 30000001, 'A123456B'),
    ('TR0002', 2000, 2, 'Mastercard', 30000002, 'B234567C'),
    ('TR0003', 3000, 3, 'Paypal', 30000003, 'C345678D'),
    ('TR0004', 4000, 4, 'Cash', 30000004, 'D4567890D'),
    ('TR0005', 2500, 2, 'Visa', 30000005, 'E5678901E');

-- and enable the foreign key again as it was. 
SET FOREIGN_KEY_CHECKS=1;


-- Insert dates and times for Flight No. 1000001
INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 09:00:00', 1000001),
    ('2023-06-01 12:00:00', 1000001),
    ('2023-06-01 15:00:00', 1000001),
    ('2023-06-02 09:30:00', 1000001),
    ('2023-06-02 12:30:00', 1000001),
    ('2023-06-02 15:30:00', 1000001);

-- Insert dates and times for Flight No. 1000002
INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 10:00:00', 1000002),
    ('2023-06-01 13:00:00', 1000002),
    ('2023-06-01 16:00:00', 1000002),
    ('2023-06-02 10:30:00', 1000002),
    ('2023-06-02 13:30:00', 1000002),
    ('2023-06-02 16:30:00', 1000002);

-- Insert dates and times for Flight No. 1000003
INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 11:00:00', 1000003),
    ('2023-06-01 14:00:00', 1000003),
    ('2023-06-01 17:00:00', 1000003),
    ('2023-06-02 11:30:00', 1000003),
    ('2023-06-02 14:30:00', 1000003),
    ('2023-06-02 17:30:00', 1000003);

-- Insert more dates and times for other flight codes...
-- Insert dates and times for Flight No. 1000004
INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 09:00:00', 1000004),
    ('2023-06-01 12:00:00', 1000004),
    ('2023-06-01 15:00:00', 1000004),
    ('2023-06-02 09:30:00', 1000004),
    ('2023-06-02 12:30:00', 1000004),
    ('2023-06-02 15:30:00', 1000004);

-- Insert dates and times for Flight No. 1000005
INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 10:00:00', 1000005),
    ('2023-06-01 13:00:00', 1000005),
    ('2023-06-01 16:00:00', 1000005),
    ('2023-06-02 10:30:00', 1000005),
    ('2023-06-02 13:30:00', 1000005),
    ('2023-06-02 16:30:00', 1000005);

-- Insert dates and times for Flight No. 1000006
INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 11:00:00', 1000006),
    ('2023-06-01 14:00:00', 1000006),
    ('2023-06-01 17:00:00', 1000006),
    ('2023-06-02 11:30:00', 1000006),
    ('2023-06-02 14:30:00', 1000006),
    ('2023-06-02 17:30:00', 1000006);

-- Insert more dates and times for Flight No. 1000007 to 1000033...

-- Flight No. 1000007
INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 09:00:00', 1000007),
    ('2023-06-01 12:00:00', 1000007),
    ('2023-06-01 15:00:00', 1000007),
    ('2023-06-02 09:30:00', 1000007),
    ('2023-06-02 12:30:00', 1000007),
    ('2023-06-02 15:30:00', 1000007);

-- Insert dates and times for Flight No. 1000008
INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 10:00:00', 1000008),
    ('2023-06-01 13:00:00', 1000008),
    ('2023-06-01 16:00:00', 1000008),
    ('2023-06-02 10:30:00', 1000008),
    ('2023-06-02 13:30:00', 1000008),
    ('2023-06-02 16:30:00', 1000008);

-- Insert dates and times for Flight No. 1000009
INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 11:00:00', 1000009),
    ('2023-06-01 14:00:00', 1000009),
    ('2023-06-01 17:00:00', 1000009),
    ('2023-06-02 11:30:00', 1000009),
    ('2023-06-02 14:30:00', 1000009),
    ('2023-06-02 17:30:00', 1000009);

-- ..... 

INSERT INTO FlightDate (flight_date, Flight_No)
VALUES
    ('2023-06-01 09:00:00', 1000033),
    ('2023-06-01 12:00:00', 1000033),
    ('2023-06-01 15:00:00', 1000033),
    ('2023-06-02 09:30:00', 1000033),
    ('2023-06-02 12:30:00', 1000033),
    ('2023-06-02 15:30:00', 1000033);
