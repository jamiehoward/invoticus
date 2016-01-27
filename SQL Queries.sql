
/* Select all information (or can be edited to show selective info) about a user. Simply replace the XXXX with the dbUsrCnt of the user. */
SELECT dbUsrCnt, dbUsrID, dbUsrName, dbUsrPass, dbUsrEml, dbUsrPhn, dbUsrGend, dbUsrBirth, dbAddDate, dbModDate, dbBPoints, dbVPoints, dbRefs, dbVoteCnt1, dbVoteCnt2, dbVoteCnt3, dbRightAmt, dbWrongAmt FROM Users WHERE dbUsrCnt = XXXX
/* Can also be: SELECT * FROM Users WHERE dbUsrCnt = XXXX */


/* Add a new user to the database */
INSERT INTO Users (dbUsrCnt, dbUsrName, dbUsrID, dbUsrPass, dbUsrEml, dbUsrPhn, dbUsrGend, dbUsrBirth, dbAddDate, dbModDate, dbBPoints, dbVPoints, dbRefs, dbVoteCnt1, dbVoteCnt2, dbVoteCnt3, dbRightAmt, dbWrongAmt) VALUES ('', 'USERNAME', 'PASSWORD', 'EMAIL', '1234567890', '0', '1900-01-01', '1900-01-01', '1900-01-01', '0', '0', '0', '', '', '', '0', '0')
/* Can also be: INSERT INTO Users VALUES ('', 'USERNAME', 'PASSWORD', 'EMAIL', '1234567890', '0', '1900-01-01', '1900-01-01', '1900-01-01', '0', '0', '0', '', '', '', '0', '0') */

/*Update user information - General reference for all fields */
UPDATE Users SET dbUsrPass = 'XXXX', dbUsrEml = 'XXXX', dbUsrPhn = 'XXXX', dbUsrGend = 'X', dbUsrBirth = 'XXXX-XX-XX', dbAddDate = 'XXXX-XX-XX', dbModDate = 'XXXX-XX-XX', dbBPoints = 'XXXX', dbVPoints = 'XXXX', dbRefs = 'XXXX', dbVoteCnt1 = 'XXXX', dbVoteCnt2 = 'XXXX', dbVoteCnt3 = 'XXXX', dbRightAmt = 'XXXX', dbWrongAmt = 'XXXX'
WHERE dbUsrCnt = XXXX.

/*Update points after adding new decision */
UPDATE Users SET dbUsrBpoints = dbUsrBPoints + 1 WHERE dbUsrCnt = XXXX

/*Update points after voting on a decision */
UPDATE Users SET dbUsrVPoints = dbUsrVPoints + 1 WHERE dbUsrCnt = XXXX

/*Update count after a referral*/
UPDATE Users SET dbRefs = dbRefs + 1 WHERE dbUsrCnt = XXXX
