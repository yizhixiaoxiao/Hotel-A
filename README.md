# Hotel Management System

基于 Laravel 10 的酒店管理系统，包含以下功能：

- 用户认证系统
- 房间管理
- 预订系统

## 技术栈
- PHP 8.1
- MySQL
- Laravel Breeze
- Vue.js 3

## 🚀 快速部署

### 环境要求
- PHP 8.1+
- MySQL 8+
- Node.js 16+
- Composer 2+
- 推荐使用集成环境如xampp

## 安装指南

```bash
# 克隆仓库
git git@github.com:yizhixiaoxiao/Hotel-A.git
cd Hotel-A

# 安装 PHP 依赖
composer install

# 安装前端依赖
npm install

# 配置环境变量(.env)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hotel_db
DB_USERNAME=root
DB_PASSWORD=your_password

# 执行数据库迁移和填充
php artisan migrate --seed

#启动项目
npm run dev
php artisan serve