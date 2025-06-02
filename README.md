# 🌿 Lalasia - Landing Page de Móveis de Alta Qualidade

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?style=flat-square&logo=laravel)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.x-purple?style=flat-square&logo=bootstrap)
![Blade](https://img.shields.io/badge/Blade-Laravel-blue?style=flat-square)
![Status](https://img.shields.io/badge/Status-Concluído-success?style=flat-square)

> Uma landing page responsiva criada com Laravel, Blade e Bootstrap. Desenvolvida com foco em boas práticas de performance, componentização e simulação de dados com PHP.

---

## ✨ Funcionalidades

- 📱 Layout 100% responsivo (Web e Mobile)
- 🛋️ Seção de produtos com carrossel animado
- 🔍 Campo de busca com filtragem dinâmica
- 💬 Depoimentos com autoplay e avatar gerado
- 🧪 Dados mocados com PHP e Faker
- 🖼️ Lazy loading + prioridade visual de imagens
- ⬆️ Botão flutuante "voltar ao topo"
- 🌀 Scroll suave e navegação fluida
- ⚡ Animações com AOS (fade, zoom, delay)
- ♻️ Componentização com Blade

---

## 🛠️ Tecnologias Utilizadas

| 💻 Ferramenta     | 📌 Para que serve                        |
|-------------------|-------------------------------------------|
| **Laravel**       | Backend e páginas com Blade               |
| **Bootstrap 5**   | Layout responsivo com sistema de grid     |
| **Vite**          | Compilação rápida de CSS e JS             |
| **AOS.js**        | Animações ao rolar a página               |
| **FakerPHP**      | Geração de dados falsos (ex: artigos)     |
| **HTML5 e CSS3**  | Estrutura e estilo da página              |
| **Blade**         | Organização e reutilização de componentes |


---

## 🚀 Requisitos

Antes de executar o projeto, certifique-se de ter instalado:

- ✅ [PHP 8.1+](https://www.php.net/)
- ✅ [Composer](https://getcomposer.org/)
- ✅ [Node.js e npm](https://nodejs.org/)

---

## ⚙️ Como Executar Localmente

### 1. Clone o projeto

```bash
git clone https://github.com/lucasbor1/laravel-landing-page-.git
```

### 2. Acesse o diretório do projeto

```bash
cd laravel-landing-page-
```

### 3. Instale as dependências do Laravel (backend)

```bash
composer install
```

### 4. Instale as dependências do frontend (Vite, Bootstrap, etc.)

```bash
npm install
```

### 5. Copie o arquivo `.env` de exemplo

```bash
cp .env.example .env
```

### 6. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 7. Execute as migrations para criar as tabelas (ex: sessions)

```bash
php artisan migrate
```

### 8. Compile os assets do frontend

```bash
npm run dev
```

### 9. Inicie o servidor local

```bash
php artisan serve
```

---

🖥️ Acesse o projeto no navegador:
[http://localhost:8000](http://localhost:8000)

