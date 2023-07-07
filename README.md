# Test technique PHP

Hello et merci de prendre le temps de faire notre test technique ! 

Le test consiste à développer un petit serializer JSON en profitant des dernières fonctionnalités de PHP.

Évidemment le tout doit être couvert par des tests unitaires :)

Tu es libre de modifier toutes les classes/interfaces qui sont déjà présentes.

Tu trouveras dans le dossier `tests/Support` deux classes `PostData` et `AuthorData`.

Ces classes vont te servir de test pour développer le serializer.

Tu devras développer deux attributs customs : `Groups` et `MapOutputName`.

`Groups` permet d'identifier les groupes de serializations et `MapOutputName` de modifier le nom de la propriété qui sera utilisé en sortie du serializer (par défaut on prend le nom de la propriété PHP).

Voici la signature finale attendu :

 ```php
$postData = new PostData(
    uuid: 'b48232d2-433c-4d6e-8d75-17f6cb93de37',
    title: 'Hello world',
    content: 'Lorem ipsum dolor...',
    viewsCount: 100,
    author: new AuthorData(
        uuid: '77118065-a7e8-49d3-9b07-e80f4bb0e2e2',
        firstname: 'John',
        lastname: 'Doe',
        phoneNumber: '0601020304'
    ),
);

$serializer = new Serialize(...); // Tu es libre d'avoir les arguments que tu veux

$output = $serializer->serialize($postData, ['public', ...]);
```

Voici l'output attendu (groups = ['public']) : 

```json
{
  "id": "b48232d2-433c-4d6e-8d75-17f6cb93de37",
  "title": "Hello world",
  "content": "Lorem ipsum dolor...",
  "author": {
    "id": "77118065-a7e8-49d3-9b07-e80f4bb0e2e2",
    "firstname": "John",
    "lastname": "Doe"
  }
}
```

BONUS: Ex plique-nous comment tu aurais procédé pour avoir un serializer multi-format (JSON, XML, CSV, ...).
