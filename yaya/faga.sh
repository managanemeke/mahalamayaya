#!/bin/bash
#
yii gii/controller --interactive=0 \
--controllerClass=app\\controllers\\WorkerController \
--baseClass=yii\\rest\\ActiveController
#
yii gii/controller --interactive=0 \
--controllerClass=app\\controllers\\ProviderController \
--baseClass=yii\\rest\\ActiveController
#
yii gii/controller --interactive=0 \
--controllerClass=app\\controllers\\SectionController \
--baseClass=yii\\rest\\ActiveController
#
yii gii/controller --interactive=0 \
--controllerClass=app\\controllers\\MealController \
--baseClass=yii\\rest\\ActiveController
#
yii gii/controller --interactive=0 \
--controllerClass=app\\controllers\\OrderController \
--baseClass=yii\\rest\\ActiveController
#
