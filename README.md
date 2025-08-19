# Teste Prático - Conversor de Texto para Voz (Text-to-Speech)

Este é um projeto desenvolvido como parte do teste prático para a vaga de Estágio em Desenvolvimento Laravel + PHP. A aplicação permite que o usuário insira um texto e, em troca, receba o áudio correspondente gerado através de uma API externa.

## 🎯 Visão Geral

O objetivo do desafio foi criar uma aplicação simples em Laravel que:
- Permita ao usuário digitar um texto em um formulário.
- Consuma uma API de voz (Text-to-Speech) para converter o texto em áudio.
- Reproduza o áudio gerado para o usuário.

O projeto foi desenvolvido seguindo as boas práticas de programação, com uma estrutura organizada de rotas, controllers e views, e está hospedado em um repositório público.

## 📸 Screenshots

https://github.com/user-attachments/assets/cdd9ef5a-8579-4b81-8151-532079e00708


## 🛠️ Tecnologias Utilizadas

*   **Backend:** PHP 8.1+
*   **Framework:** Laravel 10.x
*   **Frontend:** Blade Templates e HTML
*   **API:** Google Text-to-Speech (ou a API que você utilizou)

## ✅ Pré-requisitos

Antes de começar, certifique-se de ter o seguinte software instalado em sua máquina:
*   PHP 8.1 ou superior
*   Composer


## 🚀 Instalação e Execução

Siga os passos abaixo para executar o projeto em seu ambiente local:

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/Rafael-Luiz-Oliveira/laravel-text-to-speech.git
    cd laravel-text-to-speech
    ```

2.  **Instale as dependências do PHP:**
    ```bash
    composer install
    ```

3.  **Configure o arquivo de ambiente:**
    *   Copie o arquivo de exemplo `.env.example` para um novo arquivo chamado `.env`.
    ```bash
    cp .env.example .env
    ```
    *   Gere a chave da aplicação Laravel:
    ```bash
    php artisan key:generate
    ```

4.  **Configure as Credenciais do Google Cloud (Arquivo JSON ):**
    *   **Crie sua credencial:** Este projeto se autentica no Google Cloud usando um arquivo de credenciais de Conta de Serviço (Service Account).
        1.  Acesse o [Google Cloud Console](https://console.cloud.google.com/ ).
        2.  No menu, vá para **"IAM e Admin"** > **"Contas de Serviço"**.
        3.  Selecione seu projeto e clique em **"Criar Conta de Serviço"**. Dê um nome e uma descrição para ela.
        4.  Conceda a esta conta o papel de **"Usuário da API Cloud Text-to-Speech"**.
        5.  Após criar a conta, clique nela, vá para a aba **"Chaves"**, clique em **"Adicionar Chave"** > **"Criar nova chave"**.
        6.  Selecione o formato **JSON** e clique em "Criar". O download do arquivo de credenciais `.json` começará automaticamente.
    *   **Armazene a credencial:** Mova o arquivo `.json` que você baixou para a pasta `storage/credentials/` do seu projeto Laravel.
    *   **Adicione o caminho ao arquivo `.env`:** Abra o arquivo `.env` e adicione a seguinte linha, certificando-se de que o caminho corresponde ao local onde você salvou o arquivo:
        ```env
        GOOGLE_APPLICATION_CREDENTIALS=",/storage/credentials/seu-arquivo-de-credenciais.json"

5.  **Execute o servidor de desenvolvimento:**
    ```bash
    php artisan serve
    ```

6.  **Acesse a aplicação:**
    *   Abra seu navegador e acesse `http://127.0.0.1:8000`.

## 💡 Como Usar

1.  Acesse a página inicial da aplicação.
2.  Digite o texto que você deseja converter em voz no campo de texto.
3.  Clique no botão "Converter" (ou o nome que você deu ao botão ).
4.  O áudio será disponibilizado para que você consiga escutar

---
