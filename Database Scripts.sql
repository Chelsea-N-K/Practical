CREATE DATABASE testDB;
USE testDB;

CREATE TABLE Patients (
    patient_ID INT PRIMARY KEY AUTO_INCREMENT,
    lname TEXT,
    fname TEXT,
    minitial TEXT,
    dob DATE,
    age INT,
    sex TEXT,
    race TEXT,
    ethnicity TEXT
);

CREATE TABLE Facility (
    facility_ID INT PRIMARY KEY,
    facilityname TEXT,
    fcity TEXT,
    fcounty TEXT,
    fstate TEXT,
    phonenumber INT
);

CREATE TABLE Address (
    address_ID INT PRIMARY KEY,
    patient_ID INT ,
    facility_ID INT,
    pstreet TEXT,
    pcity TEXT,
    pcounty TEXT,
    pstate TEXT,
    FOREIGN KEY (patient_ID) REFERENCES Patients(patient_ID),
    FOREIGN KEY (facility_ID) REFERENCES Facility(facility_ID)
);

CREATE TABLE medical_records (
    record INT PRIMARY KEY,
    patient_ID INT,
    facility_ID INT,
    FOREIGN KEY (patient_ID) REFERENCES Patients(patient_ID),
    FOREIGN KEY (facility_ID) REFERENCES Facility(facility_ID)
);

CREATE TABLE data_dictionary (
  table_name varchar(255) NOT NULL,
  column_name varchar(255) NOT NULL,
  description text,
  datatype varchar(50) DEFAULT NULL,
  primary_key varchar(255) DEFAULT NULL,
  foreign_key varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO testDB.data_dictionary (
    table_name,
    column_name,
    description,
    datatype,
    primary_key,
    foreign_key
) VALUES (
    'Patients', 'patient_ID', 'Unique identifier assigned to the patient', 'INT', 'Yes', 'No'), 
    ('Patients', 'lname', 'Patient''s last name', 'TEXT', 'No', 'No'),
    ('Patients', 'fname', 'Patient''s first name', 'TEXT', 'No', 'No'),
    ('Patients', 'minitial', 'Patient''s middle initial', 'TEXT', 'No', 'No'),
    ('Patients', 'dob', 'Patient''s date of birth', 'DATE', 'No', 'No'),
    ('Patients', 'age', 'Patient''s age', 'INT', 'No', 'No'),
    ('Patients', 'sex', 'Patient''s gender', 'TEXT', 'No', 'No'),
    ('Patients', 'race', 'Patient''s race', 'TEXT', 'No', 'No'),
    ('Patients', 'ethnicity', 'Patient''s ethnical background', 'TEXT', 'No', 'No'),
    ('Facility', 'facility_ID', 'Unique identifier assigned to the facility', 'INT', 'Yes', 'No'),
    ('Facility', 'facilityname', 'The facility''s name', 'TEXT', 'No', 'No'),
    ('Facility', 'fcity', 'The city to which the facility belongs', 'TEXT', 'No', 'No'),
    ('Facility', 'fcounty', 'The county to which the facility belongs', 'TEXT', 'No', 'No'),
    ('Facility', 'fstate', 'The state to which the facility belongs', 'TEXT', 'No', 'No'),
    ('Facility', 'phonenumber', 'The facility''s phone number', 'INT', 'No', 'No'),
    ('Address', 'address_ID', 'Unique identifier assigned to the patient''s personal address', 'INT', 'Yes', 'No'),
    ('Address', 'patient_ID', 'Unique identifier assigned to the patient', 'INT', 'No', 'References Patients(patient_ID)'),
    ('Address', 'facility_ID', 'Unique identifier assigned to the facility', 'INT', 'No', 'References Facility(facility_ID)'),
    ('Address', 'pstreet', 'The street along which the patient lives', 'TEXT', 'No', 'No'),
    ('Address', 'pcity', 'The city in which the patient lives', 'TEXT', 'No', 'No'),
    ('Address', 'pcounty', 'The county in which the patient lives', 'TEXT', 'No', 'No'),
    ('Address', 'pstate', 'The state in which the patient lives', 'TEXT', 'No', 'No'),
    ('medical_records', 'record', 'Unique number assigned to the patient in a hospital', 'INT', 'Yes', 'No'),
    ('medical_records', 'patient_ID', 'Unique identifier assigned to the patient', 'INT', 'No', 'References Patients(patient_ID)'),
    ('medical_records', 'facility_ID', 'Unique identifier assigned to the facility', 'INT', 'No', 'References Facility(facility_ID)');

SELECT * FROM data_dictionary;