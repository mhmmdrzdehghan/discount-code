# Discount Code System – Laravel API (Chain of Responsibility Pattern)

This project is a *discount code system* built using *Laravel 12* and is *fully API-based*.  
It demonstrates clean code practices and architecture by utilizing the *Chain of Responsibility* design pattern.

> *Only core and essential files* are included in this repository for *code review* purposes.  
> *This project is intended for portfolio demonstration only and is not a ready-to-use plugin or package.*

---

## Features

- *Design Pattern Usage*
  - Implements the *Chain of Responsibility* pattern for handling various discount rules

- *Flexible Discount Targeting*
  - Discounts can be applied to:
    - Specific users
    - Specific product categories
  - Uses *polymorphic relationships* in the database to associate discount codes with multiple models

- *Cart Price Conditions*
  - Each discount code includes a limit field to define the *minimum cart amount* required for the discount to apply

---

## Tech Stack

- Laravel 12
- Laravel Sanctum
- MySQL
- Polymorphic relationships
- Chain of Responsibility design pattern

---

## Architecture

- The system is *fully API-driven*, designed to be used with frontend or mobile applications
- Only essential files related to discount logic are included in this repository

