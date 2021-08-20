#include<stdio.h>
void
main ()
{
  int p[50], process_No, process_head = 0, frames[10], frame, frame_head =
    0, page_fault = 0;
  int flag;
  // Input proccess no
  printf ("\n Enter no Processes between 3 - 50 : ");
  scanf ("%d", &process_No);

  // Input Processes
  for (int i = 0; i < process_No; i++)
    {
      printf ("\n Process %d  : ", i + 1);
      scanf ("%d", &p[i]);
    }

  // Input frame size
  printf ("\n Enter frame size between 3-10 : ");
  scanf ("%d", &frame);

  // frame intialize to 0
  for (int i = 0; i < frame; i++)
    {
      frames[i] = 0;
    }
  for (int i = 0; i < process_No; i++)
    {
      for (int j = 0; j < frame; j++)
	{
	  if (p[i] == frames[j])
	    {
	      flag = 0;
	      break;
	    }
	  else
	    {
	      flag = 1;
	    }

	}
      if (flag == 1)
	{
	  if (frame_head < frame)
	    {
	      frames[frame_head] = p[i];
	      frame_head++;
	      page_fault++;
	    }
	  else
	    {
	      frame_head = 0;
	      frames[frame_head] = p[i];
	      frame_head++;
	      page_fault++;
	    }
	}
    }
  for (int i = 0; i < frame; i++)
    {
      printf ("\n Frame %d : %d", i, frames[i]);
    }

  printf ("\n page fault %d", page_fault);
}
