--
-- PostgreSQL database dump
--

-- Dumped from database version 10.3 (Ubuntu 10.3-1.pgdg16.04+1)
-- Dumped by pg_dump version 10.4 (Ubuntu 10.4-1.pgdg16.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: workout; Type: SCHEMA; Schema: -; Owner: njregtwktmmlfu
--

CREATE SCHEMA workout;


ALTER SCHEMA workout OWNER TO njregtwktmmlfu;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: crunches; Type: TABLE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE TABLE workout.crunches (
    c_id integer NOT NULL,
    standard integer NOT NULL,
    reverse integer NOT NULL,
    twisting integer NOT NULL,
    tuck integer NOT NULL
);


ALTER TABLE workout.crunches OWNER TO njregtwktmmlfu;

--
-- Name: crunches_id_seq; Type: SEQUENCE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE SEQUENCE workout.crunches_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE workout.crunches_id_seq OWNER TO njregtwktmmlfu;

--
-- Name: crunches_id_seq; Type: SEQUENCE OWNED BY; Schema: workout; Owner: njregtwktmmlfu
--

ALTER SEQUENCE workout.crunches_id_seq OWNED BY workout.crunches.c_id;


--
-- Name: pushups; Type: TABLE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE TABLE workout.pushups (
    p_id integer NOT NULL,
    standard integer NOT NULL,
    wide integer NOT NULL,
    army integer NOT NULL,
    incline integer NOT NULL
);


ALTER TABLE workout.pushups OWNER TO njregtwktmmlfu;

--
-- Name: pushups_id_seq; Type: SEQUENCE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE SEQUENCE workout.pushups_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE workout.pushups_id_seq OWNER TO njregtwktmmlfu;

--
-- Name: pushups_id_seq; Type: SEQUENCE OWNED BY; Schema: workout; Owner: njregtwktmmlfu
--

ALTER SEQUENCE workout.pushups_id_seq OWNED BY workout.pushups.p_id;


--
-- Name: run; Type: TABLE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE TABLE workout.run (
    id integer NOT NULL,
    miles integer
);


ALTER TABLE workout.run OWNER TO njregtwktmmlfu;

--
-- Name: run_id_seq; Type: SEQUENCE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE SEQUENCE workout.run_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE workout.run_id_seq OWNER TO njregtwktmmlfu;

--
-- Name: run_id_seq; Type: SEQUENCE OWNED BY; Schema: workout; Owner: njregtwktmmlfu
--

ALTER SEQUENCE workout.run_id_seq OWNED BY workout.run.id;


--
-- Name: session; Type: TABLE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE TABLE workout.session (
    id integer NOT NULL,
    date timestamp without time zone NOT NULL,
    user_id integer NOT NULL,
    pushups_id integer,
    crunches_id integer
);


ALTER TABLE workout.session OWNER TO njregtwktmmlfu;

--
-- Name: session_id_seq; Type: SEQUENCE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE SEQUENCE workout.session_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE workout.session_id_seq OWNER TO njregtwktmmlfu;

--
-- Name: session_id_seq; Type: SEQUENCE OWNED BY; Schema: workout; Owner: njregtwktmmlfu
--

ALTER SEQUENCE workout.session_id_seq OWNED BY workout.session.id;


--
-- Name: user; Type: TABLE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE TABLE workout."user" (
    id integer NOT NULL,
    age integer NOT NULL,
    username character varying(30) NOT NULL,
    password character varying(30) NOT NULL,
    weight real NOT NULL
);


ALTER TABLE workout."user" OWNER TO njregtwktmmlfu;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE SEQUENCE workout.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE workout.user_id_seq OWNER TO njregtwktmmlfu;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: workout; Owner: njregtwktmmlfu
--

ALTER SEQUENCE workout.user_id_seq OWNED BY workout."user".id;


--
-- Name: crunches c_id; Type: DEFAULT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.crunches ALTER COLUMN c_id SET DEFAULT nextval('workout.crunches_id_seq'::regclass);


--
-- Name: pushups p_id; Type: DEFAULT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.pushups ALTER COLUMN p_id SET DEFAULT nextval('workout.pushups_id_seq'::regclass);


--
-- Name: run id; Type: DEFAULT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.run ALTER COLUMN id SET DEFAULT nextval('workout.run_id_seq'::regclass);


--
-- Name: session id; Type: DEFAULT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.session ALTER COLUMN id SET DEFAULT nextval('workout.session_id_seq'::regclass);


--
-- Name: user id; Type: DEFAULT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout."user" ALTER COLUMN id SET DEFAULT nextval('workout.user_id_seq'::regclass);


--
-- Data for Name: crunches; Type: TABLE DATA; Schema: workout; Owner: njregtwktmmlfu
--

COPY workout.crunches (c_id, standard, reverse, twisting, tuck) FROM stdin;
1	20	20	45	20
2	10	10	30	10
3	25	25	50	25
4	30	30	55	30
5	15	15	15	15
6	35	35	35	35
7	60	60	60	60
8	100	100	100	100
9	100	100	100	100
10	200	200	200	200
11	300	300	300	300
13	500	500	500	500
17	100	100	500	100
15	900	900	900	900
18	1	1	1	1
19	55	55	55	55
21	679	416	0	628
23	34	34	34	34
24	34	34	34	34
25	4	4	4	4
26	5	8	6	0
27	0	4	5	9
28	67	78	78	78
12	4	4	4	4
29	5	61	51	8
30	1	2	3	4
\.


--
-- Data for Name: pushups; Type: TABLE DATA; Schema: workout; Owner: njregtwktmmlfu
--

COPY workout.pushups (p_id, standard, wide, army, incline) FROM stdin;
1	5	5	5	5
2	7	7	7	7
3	8	8	8	8
4	10	10	10	10
5	15	15	15	15
6	18	18	18	18
7	100	100	100	100
9	300	300	300	300
13	9	9	9	9
14	2	2	2	2
11	70	80	90	100
12	0	0	0	0
15	35	45	23	12
16	10	10	10	10
17	5	5	5	5
18	20	23	24	25
19	35	1	2	3
20	55	55	55	55
21	33	33	33	33
8	1	1	1	1
10	100	100	100	100
\.


--
-- Data for Name: run; Type: TABLE DATA; Schema: workout; Owner: njregtwktmmlfu
--

COPY workout.run (id, miles) FROM stdin;
1	5
\.


--
-- Data for Name: session; Type: TABLE DATA; Schema: workout; Owner: njregtwktmmlfu
--

COPY workout.session (id, date, user_id, pushups_id, crunches_id) FROM stdin;
5	2018-06-04 01:36:50	2	\N	12
6	2018-06-04 01:37:08	2	\N	13
7	2018-06-04 01:46:38	2	8	\N
8	2018-06-04 01:49:34	2	9	\N
9	2018-06-04 01:52:33	1	\N	15
10	2018-06-04 01:52:49	1	10	\N
11	2018-06-04 03:18:06	1	\N	17
12	2018-06-04 03:18:26	1	11	\N
13	2018-06-04 03:28:03	1	12	\N
14	2018-06-04 03:50:17	1	13	\N
15	2018-06-04 04:14:10	2	14	\N
16	2018-06-04 05:08:22	1	\N	18
17	2018-06-04 07:28:47	1	\N	19
18	2018-06-04 05:09:06	1	15	\N
19	2018-06-04 05:13:52	1	16	\N
20	2018-06-04 07:10:27	1	17	\N
21	2018-06-04 07:47:51	1	18	\N
22	2018-06-04 07:50:02	1	\N	21
25	2018-06-04 09:04:40	2	\N	25
26	2018-06-04 09:04:54	2	19	\N
27	2018-06-04 09:19:12	1	\N	26
28	2018-06-05 01:12:06	2	\N	27
29	2018-06-06 01:08:13	4	\N	28
30	2018-06-06 02:44:57	1	20	\N
31	2018-06-06 03:38:58	2	21	\N
32	2018-06-06 09:24:39	1	\N	29
33	2018-06-07 12:24:43	1	\N	30
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: workout; Owner: njregtwktmmlfu
--

COPY workout."user" (id, age, username, password, weight) FROM stdin;
1	30	Fego	pass	175
2	28	Lace	pass	135
3	25	Nina	pass	130
4	27	Jared	pass	170
\.


--
-- Name: crunches_id_seq; Type: SEQUENCE SET; Schema: workout; Owner: njregtwktmmlfu
--

SELECT pg_catalog.setval('workout.crunches_id_seq', 30, true);


--
-- Name: pushups_id_seq; Type: SEQUENCE SET; Schema: workout; Owner: njregtwktmmlfu
--

SELECT pg_catalog.setval('workout.pushups_id_seq', 21, true);


--
-- Name: run_id_seq; Type: SEQUENCE SET; Schema: workout; Owner: njregtwktmmlfu
--

SELECT pg_catalog.setval('workout.run_id_seq', 1, true);


--
-- Name: session_id_seq; Type: SEQUENCE SET; Schema: workout; Owner: njregtwktmmlfu
--

SELECT pg_catalog.setval('workout.session_id_seq', 33, true);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: workout; Owner: njregtwktmmlfu
--

SELECT pg_catalog.setval('workout.user_id_seq', 4, true);


--
-- Name: crunches crunches_pkey; Type: CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.crunches
    ADD CONSTRAINT crunches_pkey PRIMARY KEY (c_id);


--
-- Name: pushups pushups_pkey; Type: CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.pushups
    ADD CONSTRAINT pushups_pkey PRIMARY KEY (p_id);


--
-- Name: session session_pkey; Type: CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.session
    ADD CONSTRAINT session_pkey PRIMARY KEY (id);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: user user_username_key; Type: CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout."user"
    ADD CONSTRAINT user_username_key UNIQUE (username);


--
-- Name: session session_crunches_id_fkey; Type: FK CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.session
    ADD CONSTRAINT session_crunches_id_fkey FOREIGN KEY (crunches_id) REFERENCES workout.crunches(c_id);


--
-- Name: session session_pushups_id_fkey; Type: FK CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.session
    ADD CONSTRAINT session_pushups_id_fkey FOREIGN KEY (pushups_id) REFERENCES workout.pushups(p_id);


--
-- Name: session session_user_id_fkey; Type: FK CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.session
    ADD CONSTRAINT session_user_id_fkey FOREIGN KEY (user_id) REFERENCES workout."user"(id);


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: njregtwktmmlfu
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO njregtwktmmlfu;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: LANGUAGE plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO njregtwktmmlfu;


--
-- PostgreSQL database dump complete
--

