CREATE TABLE STUDENTS
(
	STUDENT_ID INTEGER PRIMARY KEY NOT NULL,
	FIO CHAR (50) UNIQUE NOT NULL,
	COURSE INTEGER NOT NULL,
	STIPENDIA INTEGER NOT NULL DEFAULT 0,
	OTHER CHAR (100),
	CHECK (COURSE < 5 AND COURSE > 0 )
)

INSERT INTO STUDENTS
VALUES (4,'�����',2,500, '��� ����')