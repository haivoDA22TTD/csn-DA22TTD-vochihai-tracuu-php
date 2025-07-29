## Thông tin dự án
  | Họ tên     | MSSV      | Lớp     | 
| ---------- | --------- | ------- | 
| Võ Chí Hải | 110122068 | DA22TTD | 

**Giáo viên hướng dẫn:** ThS. Nguyễn Ngọc Đan Thanh
## 📑 Mục lục

- [Giới thiệu](#giới-thiệu)
- [Tính năng](#tính-năng)
- [Cài đặt](#cài-đặt)
- [Cấu trúc thư mục](#cấu-trúc-thư-mục)
- [Cách sử dụng](#cách-sử-dụng)
- [Ví dụ](#ví-dụ)
- [Công nghệ sử dụng](#công-nghệ-sử-dụng)
- [Đóng góp](#đóng-góp)
- [License](#license)

---

## 📌 Giới thiệu

Ứng dụng web viết bằng **PHP thuần** với giao diện đơn giản, cho phép người dùng **tra cứu thông tin** thông qua biểu mẫu nhập liệu. Dữ liệu có thể được truy vấn từ file hoặc cơ sở dữ liệu tùy cấu hình.

## ✨ Tính năng

- 🔍 Giao diện tìm kiếm dữ liệu theo từ khóa
- 📊 Hiển thị kết quả rõ ràng, đẹp mắt
- 🧩 Dễ dàng cấu hình và mở rộng thêm tính năng
- 🛡️ Có xử lý đầu vào (basic input validation)


## ⚙️ Cài đặt

### Yêu cầu hệ thống:

- PHP 7.4 trở lên
- Web server: Apache hoặc Nginx
- MySQL (nếu dùng DB)

### Các bước:

```bash
# 1. Clone project
git clone https://github.com/haivoDA22TTD/csn-DA22TTD-vochihai-tracuu-php.git
```
# 2. Đặt project vào thư mục web root
```bash
cd csn-DA22TTD-vochihai-tracuu-php
```
# 3. (Tùy chọn) Import CSDL nếu có
```bash
mysql -u <user> -p <database> < schema.sql
```
# 4. Cấu hình kết nối DB (nếu có): chỉnh trong file config.php

# 5. Truy cập qua trình duyệt
```bash
http://localhost/csn-DA22TTD-vochihai-tracuu-php/
```
