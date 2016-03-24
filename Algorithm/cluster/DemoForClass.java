package cluster;

import java.util.ArrayList;
import java.util.Collections;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import distance.Distance;

public class DemoForClass
{
	public static void main(String[] args)
	{
		Vectorize vectorizor = new Vectorize();
		Person p1 = new Person("John", "hella", "University of Maryland School of Public Policy", "Adnams Brewery", "Smart electric drive", "SweetWater 420 Fest", 
				"AIDS Research Alliance", "FS magazine", "SMIRNOFF LIME VODKA", "The Legend of Zelda: Four Swords Adventures", "The Legend of Zelda: Majora's Mask 3D");
		Person p2 = new Person("Donald", "National Republican Party", "Ignorance", "C-SPAN", "Ultimat Vodka", "Super Mario World", "Indoor climbing");
		Person p3 = new Person("Simon", "Adnams Brewery", "SMIRNOFF LIME VODKA", "Ultimat Vodka", "Sweetwater 420 Fest", "The Legend of Zelda: Four Swords Adventures", 
				"Super Mario World");
		Person p4 = new Person("John", "National Republican Party", "Zenbrook", "House of Alpin", "Skye", "Enjoy", "Cheese", "French Horn", "C/C++ Programming Language");
		Person p5 = new Person("Saahil", "I Can Do Bad All by Myself (film)", "Lucky Strike", "Entertainment Journalism", "Radical Cause", "Tumbleweed Tiny House Company");
		Person p6 = new Person("Zylar", "SMIRNOFF LIME VODKA", "The Legend of Zelda: Four Swords Adventures", "The Legend of Zelda: Majora's Mask 3D", "Cheese");
		Person p7 = new Person("Aaron", "color schemes", "bad questions", "linux", "Japanese traditional dolls", "Amber Alert on Facebook", "Nancy Reagan", "Coda (music)");
		
		Map<Person, int[]> peopleVectors = new HashMap<>();
		peopleVectors.put(p1, vectorizor.vectorizeToSparseVector(p1.getLikes()));
		peopleVectors.put(p2, vectorizor.vectorizeToSparseVector(p2.getLikes()));
		peopleVectors.put(p3, vectorizor.vectorizeToSparseVector(p3.getLikes()));
		peopleVectors.put(p4, vectorizor.vectorizeToSparseVector(p4.getLikes()));
		peopleVectors.put(p5, vectorizor.vectorizeToSparseVector(p5.getLikes()));
		peopleVectors.put(p6, vectorizor.vectorizeToSparseVector(p6.getLikes()));
		peopleVectors.put(p7, vectorizor.vectorizeToSparseVector(p7.getLikes()));
		Person[] alreadyUsingRoomie = { p1, p2, p3, p4, p5 };
		Person[] lookingForRoommate = { p6, p7 };
		
		for(Person a : lookingForRoommate) {
			System.out.println("Roomates for " + a);
			findBestRoommate(a, alreadyUsingRoomie, peopleVectors);
		}
	}

	private static void findBestRoommate(Person a, Person[] alreadyUsingRoomie, Map<Person, int[]> peopleVectors)
	{
		List<PersonDoublePair> similarities = new ArrayList<>();
		for(Person b : alreadyUsingRoomie) {
			similarities.add(new PersonDoublePair(b, Distance.getJaccardSimilarity(peopleVectors.get(a), peopleVectors.get(b))));
		}
		similarities.forEach(x -> System.out.println(x.getP() + ": " + x.getD()));
	}
}

class Person 
{
	private String name;
	private String[] likes;
	
	public Person(String n, String... likes) {
		name = n;
		this.likes = likes;
	}

	public String getName()
	{
		return name;
	}

	public void setName(String name)
	{
		this.name = name;
	}

	public String[] getLikes()
	{
		return likes;
	}

	public void setLikes(String[] likes)
	{
		this.likes = likes;
	}
	
	@Override
	public String toString()
	{
		return name;
	}
	
}	

class PersonDoublePair 
{
	private Person p;
	private double d;
	
	public PersonDoublePair(Person a, double b) 
	{
		p = a; d = b;
	}

	public Person getP()
	{
		return p;
	}

	public void setP(Person p)
	{
		this.p = p;
	}

	public double getD()
	{
		return d;
	}

	public void setD(double d)
	{
		this.d = d;
	}

}