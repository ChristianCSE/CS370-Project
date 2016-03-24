package cluster;

import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.Serializable;
import java.util.HashMap;
import java.util.Map;
import java.util.Map.Entry;

public class LikeDB implements Serializable
{
	private Map<String, Integer> likes;
	
	public LikeDB(String filename) {
		likes = new HashMap<>();
		try
		{
			init(filename);
		} catch (IOException e)
		{
			e.printStackTrace();
		}
	}
	
	public void init(String filename) throws IOException {
		BufferedReader read = new BufferedReader(new FileReader(filename));
		int counter = 0;
		read.readLine();
		String line = "";
		while((line = read.readLine()) != null) {
			String[] splits = line.split(",");
			likes.put(splits[0], counter++);
		}
		read.close();
	}
	
	public void save(String outfile) throws FileNotFoundException, IOException {
		ObjectOutputStream out = new ObjectOutputStream(new FileOutputStream(outfile));
		out.writeObject(likes);
		out.close();
	}
	
	static public Map<String, Integer> read(String infile) throws FileNotFoundException, IOException, ClassNotFoundException 
	{
		ObjectInputStream in = new ObjectInputStream(new FileInputStream(infile));
		Map<String, Integer> likes = (HashMap<String, Integer>) in.readObject();
		in.close();
		return likes;
	}
	
	public static void main(String[] args) throws FileNotFoundException, IOException, ClassNotFoundException
	{
		LikeDB likeDataBase = new LikeDB("/Users/alexlutz/Downloads/FBLikes.csv");
		likeDataBase.save("/Users/alexlutz/Documents/SchoolWork/FacebookLikes.ser");
	}
}
