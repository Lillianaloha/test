#include <stdio.h>
#include <time.h>
#include <stdbool.h>

/*
 * Goals: by Ravi's meeting
 * 1- Get something to print every second (CHECK)
 * 2- Get anomaly detection online (say over 5% change) (Yupeng completed)
 * 3- Get a Random Number Generator that isn't too crazy (Yupeng completed)
 * 4- Change numbers with respect to time of day (Yupeng completed)
 */

/*
 * Pleae feel free to ignore this.
 * This .c file was just out test bed to get second ticker,
 * random generators, etc. up.
 *
 * Essentially you know how you should test code in its own unit
 * before sending off to production?
 * That was the only purpose of this .c file
 */

double validMargin = 1.05;
time_t epoch;

void message()
{
    fprintf(stdout, "Advanced Software Engineering\n");
}

bool isAnomaly(int x)
{
        double testCase = (double) x;    
        double comparison = (testCase * validMargin);
        if(testCase > comparison)
        {
            return true;
        }
        else if(testCase < comparison)
        {
            return true;
        }
        return false;
}

bool secondTick(time_t current)
{
    //Get current time
    time_t now;        
    time(&now);
    now -= epoch;
        
    //Has a second passed? If not continue!
    if(now == current)
    {
        return false;
    }
    else
    {	
        return true;
    }
}

int main(int argc, char ** argv)
{
    time_t current;
    unsigned int complete = 10;
    unsigned int sampling = 2;

    time(&epoch);
    time(&current);
    current -= epoch;

    while (true)
    {
	//Prev is holding last iteration of now...
	time_t prev;
	prev = current;
	
	//Update and check...
	time(&current);
        current -= epoch;
	
/*
        time(&current);
	current -= epoch;
	
	if(secondTick(current))
*/
	if(current != prev)
	{
            //printf("A second has passed: %ld\n", current);
        
            // 10 seconds passed close...
            if (current >= complete)
            {
                printf("10 seconds are up!\n");	
                break;
            }
        
            else
            {
                //printf("current value in seconds: %ld\n", now);
                if(current % sampling == 0)
                {
                    //printf("Current Elapsed time is %ld\n", now);
                    message();
                }
            }
        }	
	
    }

	
    return 0;
}
