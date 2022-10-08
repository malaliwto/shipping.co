## Посмотреть все заказы:
	GET [url]/api/orders
	
	
## Посмотреть один заказ:
	GET [url]/api/orders/{id}
	
	
## Добавить новый заказ:
	POST [url]/api/orders/
	
	body:
		{
			"number":"SP003",
			"customer_fullname":"John Doe",
			"total_sum":6987.56,
			"shipping_address":"24 flat, Dushanbe City"
		}
	
	
## Изменить заказ:
	PUT [url]/api/orders/{id}
	
	body:
		{
			"number":"SP003",
			"customer_fullname":"John Doe Junior",
			"total_sum":63.3,
			"shipping_address":"42 flat, Moscow"
		}
		

## Удалить заказ:
	DELETE [url]/api/orders/{id}


## P.S.

Чтобы ответы Сервера были правильного формата, все запросы должны быть с Header-ом "Accept: application/json"

С уважением,
Сатторов Парвиз Наврузович