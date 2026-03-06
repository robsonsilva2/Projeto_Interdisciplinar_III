# 🚗 Sistema de Gerenciamento de Concessionária de Veículos

## 📄 Informações do Documento

- **Projeto:** Sistema de Gerenciamento de Concessionária de Veículos  
- **Versão do Documento:** 2.0  
- **Data:** 05 de março de 2026  

### Responsáveis
- Robsonsilvaws26@gmail.com  
- hilueyds@gmail.com  

---

# 📖 Introdução

## 🎯 Propósito

O objetivo deste sistema é desenvolver uma aplicação para gerenciamento de uma concessionária de veículos.

O sistema permitirá:

- Cadastro de usuários
- Login de clientes
- Visualização de veículos disponíveis no catálogo
- Registro de compras de veículos
- Armazenamento de dados em banco de dados para maior segurança e confiabilidade

A aplicação será voltada para **compra e venda de veículos novos e seminovos**.

---

## 📦 Escopo

O sistema permitirá:

- Cadastro de novos usuários
- Login de usuários existentes
- Armazenamento de dados em banco de dados
- Visualização de catálogo de veículos
- Compra de veículos novos e seminovos
- Registro de compras realizadas
- Identificação de quais clientes compraram determinados veículos

---

# ⚙️ Requisitos Funcionais

| Código | Descrição |
|------|------|
| RF01 | O sistema deve realizar o cadastro do cliente |
| RF02 | O sistema deve permitir o login do cliente cadastrado |
| RF03 | O sistema deve armazenar os dados dos clientes no banco de dados |
| RF04 | Ao clicar em **comprar**, o sistema deve verificar se existe um cliente logado |
| RF05 | Ao clicar em **ver carros**, o sistema deve mostrar o catálogo de veículos |
| RF06 | Ao clicar em **seminovos**, o sistema deve mostrar os carros dessa categoria |
| RF07 | Ao clicar em **carros novos**, o sistema deve mostrar os carros dessa categoria |
| RF08 | Ao clicar em **entrar**, o sistema deve solicitar os dados do cliente |
| RF09 | Quando o cliente estiver logado, ele poderá sair usando o botão **logout** |

---

# 🛠 Requisitos Não Funcionais

| Código | Descrição |
|------|------|
| RNF01 | O sistema deve permitir cadastro de novos clientes |
| RNF02 | O sistema deve armazenar todos os dados dos clientes cadastrados |
| RNF03 | O sistema deve registrar as compras realizadas pelos clientes |
| RNF04 | Após uma compra, o sistema deve mostrar uma mensagem informando que a reserva foi realizada |
| RNF05 | Caso o cliente precise criar uma conta, o sistema deve exibir os campos necessários |
| RNF06 | Caso o cliente já tenha conta, poderá acessar informando seus dados |
| RNF07 | O sistema deve mostrar o catálogo de veículos para clientes cadastrados ou não |
| RNF08 | O sistema deve identificar quais veículos cada cliente comprou |

---

# 📊 Modelagem do Sistema

## 📌 Diagrama de Classes

*(Inserir imagem do diagrama aqui)*

```markdown
![Diagrama de Classes](./imagens/diagrama-classes.png)
```

---

## 📌 Diagrama de Casos de Uso

*(Inserir imagem do diagrama aqui)*

```markdown
![Diagrama de Casos de Uso](./imagens/diagrama-casos-uso.png)
```

---

# 💻 Tecnologias Utilizadas

| Tecnologia | Função |
|------|------|
| HTML | Estrutura do sistema |
| CSS | Estilização da interface |
| JavaScript | Interação com o usuário |
| PHP | Comunicação com o banco de dados |
| MySQL | Armazenamento de dados |
| XAMPP | Ambiente de desenvolvimento local |

---

# 🚀 Possíveis Melhorias Futuras

- Sistema de pagamento integrado
- Painel administrativo
- Filtro avançado de veículos
- Sistema de avaliação de veículos
- Upload de imagens dos carros