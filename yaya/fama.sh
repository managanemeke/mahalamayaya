#!/bin/bash
#
yii migrate/create create_worker_table --interactive=0 \
--fields="name:string:notNull:unique"
#
yii migrate/create create_provider_table --interactive=0 \
--fields="name:string:notNull:unique,is_active:boolean:notNull:defaultValue(false)"
#
yii migrate/create create_section_table --interactive=0 \
--fields="name:string:notNull:unique,provider_id:integer:foreignKey(provider id)"
#
yii migrate/create create_meal_table --interactive=0 \
--fields="name:string:notNull:unique,composition:string:notNull,price:float:notNull,section_id:integer:foreignKey(section id)"
#
yii migrate/create create_order_table --interactive=0 \
--fields="date:datetime,worker_id:integer:foreignKey(worker id),meal_id:integer:foreignKey(meal id)"
#
yii migrate --interactive=0
