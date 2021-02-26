# Liste des routes :
### Choix: 
  - GET : http://127.0.0.1:8000/api/choices/`ID`
  - GET (all) : http://127.0.0.1:8000/api/choices?page=1
  - POST : http://127.0.0.1:8000/api/choices
            payload: ```{"name":"string","votes":[]}
						```
  - DELETE : DELETE "http://127.0.0.1:8000/api/choices/`ID`"
---
### Users: 
  - GET : http://127.0.0.1:8000/api/users/`ID`
  - GET (all) : http://127.0.0.1:8000/api/users?page=1
  - POST : http://127.0.0.1:8000/api/users
            payload: ```
						{
							"username": "username",
							"password": "password",
							"admin": false,
							"votes": []
						}
						```
  - DELETE : "http://127.0.0.1:8000/api/users/`ID`"
  - POST : "http://127.0.0.1:8000/api/users/authentication"
			payload: ```
						{
							"username": "username",
							"password": "password",
						}
						```
	
---
### Vote: 
  - GET : http://127.0.0.1:8000/api/vote/`ID`
  - GET (all) : http://127.0.0.1:8000/api/vote?page=1
  - POST : http://127.0.0.1:8000/api/vote
            payload: ```
						{
							"userID": "/api/users/{user_id}",
							"choiceID": "/api/choice/{choice_id}"
						}	
						```
  - DELETE : "http://127.0.0.1:8000/api/vote/`ID`"
