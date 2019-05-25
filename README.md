# Proyecto_Hipermedial

Lo que se busca en este proyecto es crear unsistema que sirva para la  **GESTION DE PEDIDOS PARA VENTA DE BOLETOS PARA ENTRETENIMIENTO**

# Slack 
**URL:** https://fooddriverhipermedial.slack.com

# Base De Datos

**T_ROLES**
```
CREATE TABLE T_ROLES(
 rol_id           int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 rol_desc         varchar(15) NOT NULL,
 rol_usu_crea     varchar(7) NOT NULL,
 rol_fec_crea     date NOT NULL,
 rol_usu_modifica varchar(7),
 rol_fec_modifica date,
 rol_usu_elimina  varchar(7),
 rol_fec_elimina  date,
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
```

**T_CATEGORIAS**
```
CREATE TABLE T_CATEGORIAS(
 cat_id  int NOT NULL AUTO_INCREMENT,
 cat_desc varchar(100) NOT NULL,
 cat_usu_crea     varchar(7) NOT NULL,
 cat_fec_crea     date NOT NULL,
 cat_usu_modifica varchar(7),
 cat_fec_modifica date,
 cat_usu_elimina  varchar(7),
 cat_fec_elimina  date,
 cat_estado_elimina varchar(2) DEFAULT 'N',
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
```

**T_USUARIOS**
```
CREATE TABLE T_USUARIOS(
 usu_id             int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 usu_fec_nac        date NOT NULL,
 usu_cedula         varchar(10) UNIQUE KEY NOT NULL,
 usu_nombres        varchar(50) NOT NULL,
 usu_apelidos       varchar(50) NOT NULL,
 usu_edad           int  NOT NULL,
 usu_telefono       varchar(12) NOT NULL,
 usu_direccion      varchar(150) NOT NULL,
 usu_correo         varchar(50) NOT NULL,
 usu_img            longblob,
 usu_img_tipo       varchar(150),
 usu_crea           varchar(7) NOT NULL,
 usu_fec_crea       date NOT NULL,
 usu_modifica       varchar(7),
 usu_fec_modifica   date,
 usu_elimina        varchar(7),
 usu_fec_elimina    date,
 usu_estado_elimina varchar(2) DEFAULT 'N',
 usu_rol_id         int NOT NULL
 FOREIGN KEY (usu_rol_id) REFERENCES T_ROLES(rol_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
```

**T_EMPRESAS**
```
CREATE TABLE T_EMPRESAS(
 emp_id              int NOT NULL PRIMARY KEY AUTO_INCREMENT,
 emp_ruc             varchar(13) UNIQUE KEY NOT NULL,
 emp_nombre          varchar(100) NOT NULL,
 emp_direccion       varchar(150) NOT NULL,
 emp_telefono        varchar(12) NOT NULL,
 emp_crea            varchar(7) NOT NULL,
 emp_fec_crea        date NOT NULL,
 emp_modifica        varchar(7),
 emp_fec_modifica    date,
 emp_elimina         varchar(7),
 emp_fec_elimina     date,
 emp_estado_elimina  varchar(2) DEFAULT 'N',
 emp_cat_id          int NOT NULL,
 emp_rol_id    		 int NOT NULL,
 FOREIGN KEY (emp_rol_id) REFERENCES T_ROLES(rol_id),
 FOREIGN KEY (emp_cat_id) REFERENCES T_CATEGORIAS(cat_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
```
