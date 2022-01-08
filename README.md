# ShopNow
Inventory management platform for NFTs 


create view product_cat
AS
SELECT product.id, product.productName,product.imgSrc,product.price,product.createdAt, category.catName FROM product,category WHERE product.cat_id = category.id;