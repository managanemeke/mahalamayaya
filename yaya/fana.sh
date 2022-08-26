#!/bin/bash
#
yii gii/model --interactive=0 --tableName=worker --modelClass=Worker
yii gii/model --interactive=0 --tableName=provider --modelClass=Provider
yii gii/model --interactive=0 --tableName=section --modelClass=Section
yii gii/model --interactive=0 --tableName=meal --modelClass=Meal
yii gii/model --interactive=0 --tableName=order --modelClass=Order
