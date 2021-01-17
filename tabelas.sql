-- Tabela de colaboradores (funcionários)

CREATE TABLE colaboradores 
(
    id SERIAL PRIMARY KEY,
    nome VARCHAR NOT NULL,
    matricula VARCHAR NOT NULL,
    cpf VARCHAR NOT NULL,
    ativo BOOLEAN NOT NULL DEFAULT TRUE,
    cargo VARCHAR,
    data_desligamento date,
    biometria BOOLEAN NOT NULL DEFAULT TRUE
)

-- tabela de frequencias

CREATE TABLE frequencias
(
    id SERIAL PRIMARY KEY,
    data TIMESTAMP NOT NULL,
    colaborador_id INTEGER NOT NULL,
    FOREIGN KEY (colaborador_id) REFERENCES colaboradores(id)
)

