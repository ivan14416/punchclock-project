INSERT INTO APPLICATION_USER (id, password, username) VALUES (1, '$2a$10$8ZEONd7h4yM987w36L9Im.1lgIqqP/30lY/zSRBCXg4nLkVyJbhTm', 'test');

INSERT INTO ENTRY (id, check_in, check_out, applicationuser_id) VALUES (1, '2020-09-30T03:40:20.345Z', '2020-10-24T11:35:21.345Z', 1);
INSERT INTO ENTRY (id, check_in, check_out, applicationuser_id) VALUES (2, '2020-09-30T15:06:08.345Z', '2020-09-24T11:40:20.345Z', 1);