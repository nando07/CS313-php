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
    id integer NOT NULL,
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

ALTER SEQUENCE workout.crunches_id_seq OWNED BY workout.crunches.id;


--
-- Name: pushups; Type: TABLE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE TABLE workout.pushups (
    id integer NOT NULL,
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

ALTER SEQUENCE workout.pushups_id_seq OWNED BY workout.pushups.id;


--
-- Name: session; Type: TABLE; Schema: workout; Owner: njregtwktmmlfu
--

CREATE TABLE workout.session (
    id integer NOT NULL,
    date timestamp without time zone NOT NULL,
    user_id integer NOT NULL,
    pushups_id integer NOT NULL,
    crunches_id integer NOT NULL
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
-- Name: crunches id; Type: DEFAULT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.crunches ALTER COLUMN id SET DEFAULT nextval('workout.crunches_id_seq'::regclass);


--
-- Name: pushups id; Type: DEFAULT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.pushups ALTER COLUMN id SET DEFAULT nextval('workout.pushups_id_seq'::regclass);


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

COPY workout.crunches (id, standard, reverse, twisting, tuck) FROM stdin;
\.


--
-- Data for Name: pushups; Type: TABLE DATA; Schema: workout; Owner: njregtwktmmlfu
--

COPY workout.pushups (id, standard, wide, army, incline) FROM stdin;
\.


--
-- Data for Name: session; Type: TABLE DATA; Schema: workout; Owner: njregtwktmmlfu
--

COPY workout.session (id, date, user_id, pushups_id, crunches_id) FROM stdin;
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: workout; Owner: njregtwktmmlfu
--

COPY workout."user" (id, age, username, password, weight) FROM stdin;
\.


--
-- Name: crunches_id_seq; Type: SEQUENCE SET; Schema: workout; Owner: njregtwktmmlfu
--

SELECT pg_catalog.setval('workout.crunches_id_seq', 1, false);


--
-- Name: pushups_id_seq; Type: SEQUENCE SET; Schema: workout; Owner: njregtwktmmlfu
--

SELECT pg_catalog.setval('workout.pushups_id_seq', 1, false);


--
-- Name: session_id_seq; Type: SEQUENCE SET; Schema: workout; Owner: njregtwktmmlfu
--

SELECT pg_catalog.setval('workout.session_id_seq', 1, false);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: workout; Owner: njregtwktmmlfu
--

SELECT pg_catalog.setval('workout.user_id_seq', 1, false);


--
-- Name: crunches crunches_pkey; Type: CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.crunches
    ADD CONSTRAINT crunches_pkey PRIMARY KEY (id);


--
-- Name: pushups pushups_pkey; Type: CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.pushups
    ADD CONSTRAINT pushups_pkey PRIMARY KEY (id);


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
    ADD CONSTRAINT session_crunches_id_fkey FOREIGN KEY (crunches_id) REFERENCES workout.crunches(id);


--
-- Name: session session_pushups_id_fkey; Type: FK CONSTRAINT; Schema: workout; Owner: njregtwktmmlfu
--

ALTER TABLE ONLY workout.session
    ADD CONSTRAINT session_pushups_id_fkey FOREIGN KEY (pushups_id) REFERENCES workout.pushups(id);


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

