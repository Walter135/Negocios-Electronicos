USE ritsolution;

CREATE TABLE IF NOT EXISTS ritsolution.CATEGORIA (
  ID_CATEGORIA INT NOT NULL,
  DESCRIPCION VARCHAR(30) NOT NULL,
  PRIMARY KEY (ID_CATEGORIA)
);

CREATE TABLE IF NOT EXISTS ritsolution.PRODUCTO (
  ID_PRODUCTO INT NOT NULL,
  MARCA VARCHAR(20) NOT NULL,
  MODELO VARCHAR(50) NOT NULL,
  DESC_REDUCIDA VARCHAR(200) NOT NULL,
  DESC_AMPLIADA VARCHAR(500) NOT NULL,
  STOCK INT NOT NULL,
  PRECIO DECIMAL(6,2) NOT NULL,
  IMAGEN VARCHAR(40) NOT NULL,
  ID_CATEGORIA INT NOT NULL,
  PRIMARY KEY (ID_PRODUCTO),
  CONSTRAINT FK_PRODUCTO_CATEGORIA
    FOREIGN KEY (ID_CATEGORIA)
    REFERENCES ritsolution.CATEGORIA (ID_CATEGORIA)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION  
)