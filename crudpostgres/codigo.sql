CREATE TABLE public.usuarios
(
    id SERIAL NOT NULL,
    nombre character varying(100),
    precio numeric(6, 2),
    fecha date,
    acepto boolean,
    PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.usuarios
    OWNER to postgres;
	
INSERT INTO public.usuarios (nombre,precio,fecha,acepto) VALUES('JUAN',20.95,'2023-05-19',false);

select * from public.usuarios;