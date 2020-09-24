INSERT INTO APPLICATION_USER (id, password, username) VALUES (1, '2a$10$i4INelEJBbELiXzBCKc6iOff9ibgZf2AP5IS.15sV5yvD2ewDEB0W', 'test');

INSERT INTO ENTRY (id, check_in, check_out, applicationuser_id) VALUES (1, '2020-09-30T03:40:20.345Z', '2020-10-24T11:35:21.345Z', 1);
INSERT INTO ENTRY (id, check_in, check_out, applicationuser_id) VALUES (2, '2020-09-30T15:06:08.345Z', '2020-09-24T11:40:20.345Z', 2);
INSERT INTO ENTRY (id, check_in, check_out, applicationuser_id) VALUES (3, '2020-09-30T12:43:21.345Z', '2020-09-24T11:50:21.345Z', 2)