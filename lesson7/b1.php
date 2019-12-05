tạo 2 bảng trong csdl gồm:
- categories
	id int pk ai
	name varchar 255
- products
	id int pk ai
	name varchar 255
	image varchar 255
	price int
	cate_id int
	detail text
Tạo form để thêm dữ liệu vào trong 2 bảng

**** Tạo danh mục mới ***
create_category_form.php
save_category.php
list_category.php - hiển thị danh sách danh mục

*** Tạo sản phẩm mới  ***
create_products_form.php
save_products.php
list_product.php - hiển thị danh sách sản phẩm