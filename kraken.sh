#!/bin/bash

echo "_ switching into scripts directory"

cd scripts/

PS3='Please enter your choice: '
options=("Full Install" "Build Docker Container" "Setup Environment" "Import Data" "Run Tests" "Quit")

select opt in "${options[@]}"
do
    case $opt in
        "Full Install")
            echo "you chose choice $REPLY which is $opt"
            . build.sh
            . setup_environment.sh
            . import_data.sh
            break
            ;;
        "Build Docker Container")
            echo "you chose choice $REPLY which is $opt"
            . build.sh
            break
            ;;
        "Setup Environment")
            echo "you chose choice $REPLY which is $opt"
            . setup_environment.sh
            break;
            ;;
        "Import Data")
            echo "you chose choice $REPLY which is $opt"
            . import_data.sh
            break
            ;;
        "Run Tests")
            echo "you chose choice $REPLY which is $opt"
            . test.sh
            break
            ;;
        "Quit")
            break
            ;;
        *) echo "invalid option $REPLY";;
    esac
done

echo "_ switching back to previous directory"

cd -

echo "_ quitting"