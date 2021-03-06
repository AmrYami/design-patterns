<?php
//binary to decimal
//101
//(1*2^2) (0*2^1) (1*2^0) = 5
//110
//(1*2^2) (1*2^1) (0*2^0) = 6
//11010
//(1*2^4) (1*2^3) (0*2^2) (1*2^1) (0*2^0)
//16         8        0       2      0  = 26


//0,1,2,3,4,5,6,7,8,9, a, b , c  ,   d   , e   , f
//                    10  1  12    13     14    15
//10b2c
//(1*16^4) (0*16^3) (11*16^2) (2*16^1) (12*16^0)
//65536    +  0   +   2816     32        12     = 68396

//decimal to binary
//6 = 6/2 = 3   3/2 = 1 = 110
//        0      1    1


// -1
// 1/2 = 0001
//       1110 reverse them
//       0001 add one
//       1111 is -1