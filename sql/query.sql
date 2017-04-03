CREATE TABLE studentDetails (
	FirstName varchar(255) NOT NULL,
	LastName varchar(255) NOT NULL,
	RollNo 	INT(7) NOT NULL,
	Email varchar(255) NOT NULL,
	Semester INT(10) NOT NULL,
	yearOfJoining varchar(10) NOT NULL,
	Password varchar(32) NOT NULL,
	Branch varchar(32) NOT NULL,
	image varchar(255) NOT NULL,
	PRIMARY KEY (RollNo)
);
CREATE TABLE adminDetails(
	FirstName varchar(300) NOT NULL,
	LastName varchar(300) NOT NULL,
	Email varchar(300) NOT NULL,
	Password varchar(300) NOT NULL,
	PRIMARY KEY (Email)
);
CREATE TABLE SemesterCourses (
	RollNo INT(7) NOT NULL,
	CourseName varchar(100) NOT NULL,
	CourseCode varchar(100) NOT NULL,
	Attendace INT(20) NOT NULL,
    PRIMARY KEY(RollNo),
	FOREIGN KEY(ROLLNO) REFERENCES studentDetails(RollNo)
	
);
CREATE TABLE complaints (
	complaintId INT NOT NULL AUTO_INCREMENT,
	Description varchar(1024) NOT NULL,
	RollNo INT(7) NOT NULL,
	PRIMARY KEY(complaintId),
	FOREIGN KEY(RollNo) references studentDetails(RollNo)
); 
CREATE TABLE TimeTable (
	Semester varchar(10) NOT NULL,
	pdfs varchar(100) NOT NULL
);
CREATE TABLE Faculty (
	Name varchar(255) NOT NULL,
	Email varchar(255)NOT NULL,
	PRIMARY KEY(Email)
);
CREATE TABLE Courses (
	CourseCode varchar(100) NOT NULL,
	CourseName varchar(100) NOT NULL,
	Semester INT(10) NOT NULL,
	Links varchar(100)NOT NULL,
	Email varchar(255)NOT NULL,
	FOREIGN KEY (Email) references Faculty(Email)
);
