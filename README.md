# Lista de Jogos com Laravel & Bootstrap

![Banner do Projeto](link-para-imagem-do-banner.png) <!-- Substitua 'link-para-imagem-do-banner.png' por um link para um banner visual do projeto, se desejar. -->

Este projeto foi criado para demonstrar boas práticas no desenvolvimento com Laravel, integrando uma lista de jogos diretamente a um banco de dados MySQL, e com uma interface elegante construída com Bootstrap.

## 🛠 Tecnologias

- **Backend**: Laravel
- **Frontend**: Bootstrap
- **Banco de Dados**: MySQL

## 🚀 Instalação e Uso

1. **Clone o repositório**

   ```bash
   git clone https://github.com/kurjata/laravel-games.git
   cd laravel-games
   ```

2. **Configure as variáveis de ambiente**

   Copie o arquivo `.env.example` para `.env` e configure as variáveis de conexão com o banco de dados MySQL.

3. **Instale as dependências**

   ```bash
   composer install
   ```

4. **Gere a chave da aplicação**

   ```bash
   php artisan key:generate
   ```

5. **Execute as migrações e sementes (se houver)**

   ```bash
   php artisan migrate --seed
   ```

6. **Inicie o servidor de desenvolvimento**

   ```bash
   php artisan serve
   ```

   Agora, você pode acessar [http://localhost:8000](http://localhost:8000) para ver o projeto em ação.

## 🤝 Contribuições

Pull requests são bem-vindos. Para mudanças importantes, abra uma issue primeiro para discutir o que você gostaria de alterar.

## Autor

Felipe Kurjata - Full Stack Developer

---
