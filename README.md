# Api Números Romanos

 Api desenvolvida para teste da empresa Studio Sol

# Documentação Api

 ##  Como abrir o código em seu computador!

Baixe o arquivo zip e o descompacte, depois o abra em seu editor de código fonte de preferência.

## Como Utilizar a Api

Na pasta do projeto, em seu termminal execute o seguinte comando:

```./vendor/bin/sail up```

Após executar o comando abra o *Insominia* ou o *Postman* e execute os próximos passos:

* Execute uma request *POST*  no endpoint ```http://0.0.0.0:80/api/search```
  
  ![POST](/img-doc/POST.png)

* No **Body** de sua requisição passe um *JSON* com o nome do campo como **text** e o valor passado deve ser número romano válido, siga o exemplod de JSON abaixo:
  ```
  {
	"text": "XL"
  }
  ```

  ![JSON](/img-doc/JSON.png)

* Nos **Headers** de sua requisição passe estes dois campos com seus respectivos valores:
  ```
    Accept: application/json
    Content-Type: application/json
  ```

  ![HEADER](/img-doc/HEADER.png)

* Depois de seguir os passos você receberá **200OK** e o *JSON* abaixo com a resposta de sua requisição:
  ```
  {
    "number": "XL",
    "value": 40
  }
  ```

  ![200OK](img-doc/200OK.png)

# Casos de erro da requisição

 * Primeiro caso, se você passar não passar um número romano ou não passar a key **text** o retorno de erro será **422 Unprocessable Content** com *JSON* contendo a mensagem de erro, como os exemplos abaixo:

    ![ERROR422](/img-doc/ERROR422.png)
    ![RESPONSE_ERROR_422](/img-doc/RESPONSE_ERROR_422.png)

 * Segundo caso, se você se esquecer de passar os campos do **Headers** o retorno de erro será **404 Not Found**, como os exemplos abaixo:

    ![HEADER_ERROR](/img-doc/HEADER_ERROR.png)
    ![404_NOT_FOUND](/img-doc/404_NOT_FOUND.png)
