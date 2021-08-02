#!/bin/sh  
while true  
do 
  echo `date +%Y-%m-%d.%H:%M:%S` > try 
  git add .
  git commit -m "up"
  git push 
  sleep 60  
done

