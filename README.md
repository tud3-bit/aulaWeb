# aulaWeb - Plataforma de Aprendizagem e Questões Web

Bem-vindo ao repositório do projeto **aulaWeb**. Esta aplicação foi desenvolvida para apoiar aulas e práticas de programação, oferecendo um ambiente interativo para resolução de questões nas linguagens HTML, PHP e Python, integrado com uma interface estilizada e materiais de experiência do usuário (UX).

---

## 📁 Estrutura de Arquivos e Pastas

O projeto está organizado da seguinte forma dentro da pasta `aulaWeb`:

* **`index.php`**: Página principal da aplicação. Funciona como o painel de boas-vindas e ponto de entrada central para navegação entre as diferentes seções e questionários.
* **`questoes-html.php`**: Módulo interativo voltado para a prática de exercícios e questões estruturais em **HTML**.
* **`questoes-php.php`**: Módulo interativo voltado para a listagem, execução e prática de exercícios e questões em **PHP**.
* **`questoes-python.php`**: Módulo dedicado à exibição e resolução de desafios e questões na linguagem **Python**.
* **`style.css`**: Folha de estilos global do projeto. Contém as regras de design, paleta de cores, tipografia e responsividade para garantir uma boa experiência visual aos usuários.
* **`ux/`**: Diretório reservado para artefatos de Experiência do Usuário (UX), protótipos, fluxos de navegação ou documentação de usabilidade do projeto.

---

## 🚀 Instruções de Uso com XAMPP

Para executar e testar o projeto localmente utilizando o ambiente XAMPP, siga os passos abaixo:

### Pré-requisitos
Certifique-se de possuir instalado em sua máquina:
1. O **XAMPP** instalado (com o módulo Apache ativo).
2. Um navegador web moderno (Chrome, Firefox, Edge, Safari).

### Passo a Passo

1. **Posicionar a Pasta do Projeto:**
   * Copie a pasta inteira chamada `aulaWeb`[cite: 1].
   * Cole-a dentro do diretório raiz do servidor web do XAMPP, que geralmente fica localizado em:
     * **Windows:** `C:\xampp\htdocs\`
     * **Linux/macOS:** `/opt/lampp/htdocs/` ou na sua pasta de instalação correspondente.

2. **Iniciar o Servidor Apache:**
   * Abra o painel de controle do **XAMPP Control Panel**.
   * Clique no botão **Start** ao lado do serviço **Apache** para iniciar o servidor web local.

3. **Acessar a Aplicação no Navegador:**
   * Abra o seu navegador web favorito.
   * Digite a URL apontando para a pasta do projeto no formato `localhost/nome-da-pasta`[cite: 1]:
     ```text
     http://localhost/aulaWeb/
     ```

4. **Navegando pelas Funcionalidades:**
   * Utilize a página principal para alternar entre os módulos de estudo de **HTML**, **PHP** e **Python**.
   * Resolva os desafios de lacunas de lógica e valide seu aprendizado instantaneamente na tela.
   * Consulte a pasta `ux` para detalhes sobre o planejamento de interface e usabilidade.

---

## 🛠️ Contribuindo
Sinta-se à vontade para abrir issues ou enviar pull requests com melhorias nas questões, correções de estilo em `style.css` ou aprimoramentos de UX na pasta correspondente.