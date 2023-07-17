INSERT INTO `tutores` (`numero`, `nome`, `nif`, `sexo`, `datadenascimento`, `linguasfaladas`, `bio`, `foto`, `email`, `telemovel`, `telemovel2`, `endereco`, `classificacao`, `estado`) VALUES
    ('00001', 'João Silva', '123456789', 'M', '1990-01-01', 'Português, Inglês', 'Texto da biografia', NULL, 'joao@gmail.com', '1234567890', '9876543210', 'Rua ABC', '4', 'Ativo'),
    ('00002', 'Maria Santos', '987654321', 'F', '1992-02-02', 'Português, Espanhol', 'Texto da biografia', NULL, 'maria@gmail.com', '9876543210', '1234567890', 'Avenida XYZ', '3', 'Ativo'),
    ('00003', 'António Pereira', '456789123', 'M', '1988-03-03', 'Português, Francês', 'Texto da biografia', NULL, 'antonio@gmail.com', '5555555555', '9999999999', 'Rua DEF', '4', 'Ativo'),
    ('00004', 'Ana Costa', '654321987', 'F', '1995-04-04', 'Português, Inglês, Espanhol', 'Texto da biografia', NULL, 'ana@gmail.com', '1111111111', '2222222222', 'Avenida GHI', '4', 'Ativo'),
    ('00005', 'José Santos', '321654987', 'M', '1993-05-05', 'Português', 'Texto da biografia', NULL, 'jose@gmail.com', '3333333333', '4444444444', 'Rua JKL', '4', 'Ativo'),
    -- Add more insert statements as needed
    ('00006', 'Margarida Almeida', '456789123', 'F', '1991-06-06', 'Português, Francês, Alemão', 'Texto da biografia', NULL, 'margarida@gmail.com', '6666666666', '8888888888', 'Avenida MNO', '3', 'Ativo'),
    ('00007', 'Luís Ferreira', '789012345', 'M', '1994-07-07', 'Português, Inglês', 'Texto da biografia', NULL, 'luis@gmail.com', '7777777777', '5555555555', 'Rua PQR', '3', 'Ativo'),
    ('00008', 'Sofia Carvalho', '654987321', 'F', '1996-08-08', 'Português, Francês', 'Texto da biografia', NULL, 'sofia@gmail.com', '0000000000', '9999999999', 'Rua STU', '5', 'Ativo'),
    ('00009', 'Rui Mendes', '987012345', 'M', '1992-09-09', 'Português, Alemão', 'Texto da biografia', NULL, 'rui@gmail.com', '2222222222', '1111111111', 'Avenida VWX', '3', 'Ativo'),
    ('00010', 'Carolina Rocha', '789654321', 'F', '1990-10-10', 'Português, Espanhol, Francês', 'Texto da biografia', NULL, 'carolina@gmail.com', '4444444444', '3333333333', 'Rua YZ', '4', 'Ativo'),
    ('00011', 'Daniel Rodrigues', '012345678', 'M', '1993-11-11', 'Português', 'Texto da biografia', NULL, 'daniel@gmail.com', '6666666666', '5555555555', 'Avenida ABC', '5', 'Ativo'),
    ('00012', 'Mariana Fernandes', '987654321', 'F', '1991-12-12', 'Português, Francês, Alemão', 'Texto da biografia', NULL, 'mariana@gmail.com', '8888888888', '7777777777', 'Rua DEF', '4', 'Ativo'),
    ('00013', 'Alexandre Cardoso', '654321987', 'M', '1989-01-01', 'Português, Espanhol', 'Texto da biografia', NULL, 'alexandre@gmail.com', '0000000000', '9999999999', 'Rua GHI', '3', 'Ativo'),
    ('00014', 'Carla Costa', '789012345', 'F', '1994-02-02', 'Português, Francês', 'Texto da biografia', NULL, 'carla@gmail.com', '2222222222', '1111111111', 'Avenida JKL', '5', 'Ativo'),
    ('00015', 'Eduardo Oliveira', '654987321', 'M', '1992-03-03', 'Português, Alemão', 'Texto da biografia', NULL, 'eduardo@gmail.com', '3333333333', '4444444444', 'Rua MNO', '2', 'Ativo'),
    ('00016', 'Inês Martins', '987012345', 'F', '1995-04-04', 'Português, Inglês', 'Texto da biografia', NULL, 'ines@gmail.com', '5555555555', '6666666666', 'Avenida PQR', '4', 'Ativo');

    
    INSERT INTO cobrancas (aluno_id, data_cobranca, data_limite, data_pagamento, montante, multa, iva, descricao, referencia, modo_pagamento, estado, created_at, updated_at)
VALUES
    (1, '2023-01-01', NULL, '2023-01-05', 100.00, 0.00, 23.00, 'Propina Janeiro', '123456789', 'Cartão de Crédito', 'Pago', NOW(), NOW()),
    (2, '2023-01-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Janeiro', '987654321', 'Transferência Bancária', 'Nao Pago', NOW(), NOW()),
    (3, '2023-01-01', NULL, '2023-01-03', 120.00, 0.00, 27.60, 'Propina Janeiro', '456789123', 'Dinheiro', 'Pago', NOW(), NOW()),
    (1, '2023-02-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Fevereiro', '789123456', 'Cartão de Crédito', 'Nao Pago', NOW(), NOW()),
    (2, '2023-02-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Fevereiro', '321654987', 'Transferência Bancária', 'Nao Pago', NOW(), NOW()),
    (3, '2023-02-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Fevereiro', '654987321', 'Dinheiro', 'Nao Pago', NOW(), NOW()),
    (1, '2023-03-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Março', '987654123', 'Cartão de Crédito', 'Nao Pago', NOW(), NOW()),
    (2, '2023-03-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Março', '123654789', 'Transferência Bancária', 'Nao Pago', NOW(), NOW()),
    (3, '2023-03-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Março', '456321789', 'Dinheiro', 'Nao Pago', NOW(), NOW()),
    (1, '2023-04-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Abril', '789456123', 'Cartão de Crédito', 'Nao Pago', NOW(), NOW()),
    (2, '2023-04-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Abril', '321987654', 'Transferência Bancária', 'Nao Pago', NOW(), NOW()),
    (3, '2023-04-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Abril', '654123987', 'Dinheiro', 'Nao Pago', NOW(), NOW()),
    (1, '2023-05-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Maio', '987321456', 'Cartão de Crédito', 'Nao Pago', NOW(), NOW()),
    (2, '2023-05-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Maio', '321789654', 'Transferência Bancária', 'Nao Pago', NOW(), NOW()),
    (3, '2023-05-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Maio', '654987123', 'Dinheiro', 'Nao Pago', NOW(), NOW()),
    (1, '2023-06-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Junho', '987654321', 'Cartão de Crédito', 'Nao Pago', NOW(), NOW()),
    (2, '2023-06-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Junho', '321654789', 'Transferência Bancária', 'Nao Pago', NOW(), NOW()),
    (3, '2023-06-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Junho', '654987321', 'Dinheiro', 'Nao Pago', NOW(), NOW()),
    (1, '2023-07-01', NULL, NULL, 100.00, 0.00, 23.00, 'Propina Julho', '987321654', 'Cartão de Crédito', 'Nao Pago', NOW(), NOW()),
    (2, '2023-07-01', NULL, NULL, 80.00, 0.00, 18.40, 'Propina Julho', '321789456', 'Transferência Bancária', 'Nao Pago', NOW(), NOW()),
    (3, '2023-07-01', NULL, NULL, 120.00, 0.00, 27.60, 'Propina Julho', '654123789', 'Dinheiro', 'Nao Pago', NOW(), NOW());
