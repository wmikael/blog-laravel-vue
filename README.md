
# Blog

Blog desenvolvido com laravel 10 e vue 3.

## API

### index: GET http://localhost:9191/api/articles

Retorna lista paginada de materias sem o conteudo da materia.

### store: POST http://localhost:9191/api/articles

Ao passar um body como:

{
    "title": "Título do Artigo",
    "description": "Descrição do Artigo",
    "content": "Conteúdo do Artigo",
    "image": "link_para_imagem.jpg",
    "published_at": "2024-03-04T12:00:00"
}

Efetua o cadastro da materia

### show: GET http://localhost:9191/api/articles/{id}

Ao passar um id, retorna as informacoes completas da materia.

### update: PUT http://localhost:9191/api/articles/{id}

Ao passar um id e um body com os campos alterados da materia, atualiza a materia e retorna ela atualizada.

### destroy: DELETE http://localhost:9191/api/articles/{id}

Ao passar um id apaga a materia.

## Front

O front basicamente consome apenas o index na pagina inicial, onde lista cards de materias com informacoes resumidas de forma paginada e ao usuario clicar em um card de materia, é redirecionado pra pagina da materia onde o show é consumido e é mostrado todas as informaçoes detalhas da materia.

## Passo a passo
Certifique-se de ter o docker engine instalado.

Clone Repositório:

```sh
git clone -b dev https://github.com/wmikael/blog-laravel-vue.git
```

Acesse o diretorio do projeto:

```sh
cd blog-laravel-vue
```

Suba os containers do projeto:

```sh
docker compose up -d
```

### Acesse o projeto:

#### Front:

[http://localhost:8080](http://localhost:8080)

#### Back:

[http://localhost:8989](http://localhost:8989)
