/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   main.c                                             :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: leo <leo@student.42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2022/03/24 10:34:17 by leo               #+#    #+#             */
/*   Updated: 2022/03/24 10:51:35 by leo              ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include <stdio.h>

void test(void)
{
	static int a = 10;
	printf("%d\n", a);
	a++;
}
int main(void)
{
	int res = 0;
	
	test();
	test();
	test();
	test();
	return 0;
}